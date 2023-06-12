<?php

namespace App\Http\Controllers\Api;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\ResetPassNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\Rules\Password as RulesPassword;
use Ichtrojan\Otp\Otp;
class ResetPasswordController extends Controller
{
    public $otp;
    public function __construct() {
        $this->otp = new Otp;
    }


    public function forgotPassword(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|exists:users',
        ]);
      
        $inpout=$request->only('email');
        $user=User::where('email',$inpout)->first();
        $user->notify(new ResetPassNotification);
        return response()->json(['message' => 'Success','status_code' => 200,],200 );
    }




    public function resetPassword(Request $request)
    {   
        $request->validate([
            'otp' => ['required','max:6'],
            'email' => 'required|email|exists:users',
            'password' => ['required', RulesPassword::defaults()],
        ]);
        $otp2 = $this->otp->validate($request->email, $request->otp);
        
        if (!$otp2->status) {
            return response()->json('Error verifying email', 404);
        }


        $user = User::where('email', $request->email)->first();
        $user->password =bcrypt($request->password);
        $user->save();
        $user->tokens()->delete();
        return response()->json(['message' => 'Success','status_code' => 200,],200 );
    }
}
