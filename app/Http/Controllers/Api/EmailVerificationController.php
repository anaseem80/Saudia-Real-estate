<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\EmailverfyNotification;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    public $otp;
    public function __construct() {
        $this->otp = new Otp;
    }
    
    public function sendEmailverfyc(Request $request)
    {
             $user = $request->user;
             $user->notify(new EmailverfyNotification());
             return response()->json(['message' => 'Success','status_code' => 200,],200 );
        
    }
    

    public function verifyEmail(Request $request)
    {
        $otp2 = $this->otp->validate($request->email, $request->otp);
        
        if (!$otp2->status) {
            return response()->json('Error verifying email', 404);
        }
        
        $user = User::where('email', $request->email)->first();
        $user->email_verified_at = now();
        $user->save();
        
        return response()->json(['message' => 'Success','status_code' => 200,],200 );
    }
}
