<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\EmailverfyNotification;
use App\Notifications\LoginNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
class AuthaaController extends Controller
{
    use Notifiable;
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return response()->json(['error' => 'Incorrect login credentials'], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('authToken')->plainTextToken;
        $user->notify(new LoginNotification);
        return response()->json(['token' => $token,'user'=>$user],200);
    }



   public function logout(Request $request) {
 
        $request->user->tokens()->delete();
        return response()->json(['message' => 'Success','status_code' => 200,],200);
    
}




    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone'=> 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $user = new User(); // اسم المودل
        $user->name = $request->name; // اسم الجدول في الداتا بيز \ثم القيمه اللي هدخلهالو سواء هتكتبها ثبته او هتخدها من الريكوست
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->country = $request->country;
        $user->phone = $request->phone;
        $user->save();
  

        $token = $user->createToken('Laravel Sanctum')->plainTextToken;
        $user->notify(new EmailverfyNotification);
        return response()->json(['token' => $token,'message' => 'Success','status_code' => 200,],200);


    }





}
