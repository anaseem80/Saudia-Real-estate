<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
 
class ProfileMobileController extends Controller
{
    public function updateUserInfo(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
        $user = $request->user;
        $user->name=$request->name;
        $user->country=$request->country;
        $user->phone=$request->phone ;
        $user->save();
        return response()->json(['message' => 'Success','status_code' => 200,],200 );
    }
    


    public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:6|different:old_password',
            'new_password_confirmation' => 'required|string|same:new_password',
        ]);
        $user = $request->user;
        if (!Hash::check($validatedData['old_password'], $user->password)) {
            return response()->json(['message' => 'The old password is incorrect'], 422);
        }
    
        $user->update(['password' => Hash::make($validatedData['new_password'])]);
    
        return response()->json(['message' => 'Success','status_code' => 200,],200 );
    }
    
}
