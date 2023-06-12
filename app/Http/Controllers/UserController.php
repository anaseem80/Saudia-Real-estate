<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('realest.user_view', ['userdata' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
         
            'phone' => 'required|numeric',
    
    
        ],[
    
        
            'phone.numeric' =>'يرجي ادخال رقم الهاتف عدد وليس اي شئ اخر',
        ]);

        $user = new User(); // اسم المودل
        $user->name = $request->name; 

        $user->user_type = $request->user_type;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        session()->flash('Edit', 'تم اضافة المستخدم بنجاح');
        return back();
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
        {
            $request->validate([
            
            'phone' => 'required|numeric',


        ],[

           
            'phone.numeric' =>'يرجي ادخال رقم الهاتف عدد وليس اي شئ اخر',
        ]);
           $user =  User::findorFail($request->pro_id);
           $user->name = $request->name; 
           $user->user_type = $request->user_type;
           $user->phone = $request->phone;
           $user->country = $request->country;
           $user->save();

           session()->flash('Edit', 'تم تعديل المستخدم بنجاح');
           return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        $property = User::findOrFail($request->pro_id);
        $property->delete();
        session()->flash('delete', 'تم حذف المنتج بنجاح');
        return back();
    }
}
