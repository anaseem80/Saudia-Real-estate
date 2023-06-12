<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
function Getusername(){
    return Auth::User()->name;
}
function Getuserphone(){
    return Auth::User()->phone;
}
function  Getusertype(){
    return Auth::User()->user_type;
}

function Getuserid(){
    return Auth::User()->id;
}

function Getuseremail(){
    return Auth::User()->email;
}
 function uplodeImageCustomaa(Request $request,$foldername)
{
    $image = $request->file('photo');
    $filename = time().'.'.$image->getClientOriginalExtension();
    $path = $image->storeAs($foldername, $filename,'Taha');//اسم الفولدر /اسم الملف /disksال 

    return back()
        ->with('success','Image uploaded successfully.');
}




















