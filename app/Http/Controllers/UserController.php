<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
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
    public function index(Request $request)
    {
        $userdata = User::orderBy('id', 'DESC')->paginate(5);
         $roles = Role::all();
        return view('dashboard.user_view', compact('userdata','roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $isToggleOnString = (string) $request->isToggleOn;
        $status = '';
        $userId = $request->input('userId');
        if ($isToggleOnString == "true") {
            $status = 'active';
        } else {
            $status = 'inactive';
        }



        $user = User::find($userId);

        if ($user) {
            // Update the status field
            $user->status = $status;
            $user->save();

            return response()->json(['success' => true, 'message' => 'User status  updated successfully']);
        }

        return response()->json(['success' => false, 'message' => 'User not found']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User(); // اسم المودل
        $user->name = $request->name;
        $user->user_type = $request->user_type;
        $user->first_phone = $request->first_phone;
        $user->second_phone = $request->second_phone;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->advertiser_type = $request->advertiser_type;
        if ($request->advertiser_type == "user") {
            $user->user_type = "user";
        } else {
            $user->user_type = "vendor";
        }
        if ($request->advertiser_type == "office" || $request->advertiser_type == "owner") {
            $user->commercial_registration_no = $request->commercial_registration_no;
            $user->license_number = $request->license_number;
        } else if ($request->advertiser_type == "broker") {
            $user->license_number = $request->license_number;
        }
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
        $user->assignRole($request->input('roles'));
        session()->flash('Add', 'تم اضافة المستخدم بنجاح');
        return back()->with('success', 'User created successfully');;
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
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit', compact('user', 'roles', 'userRole'));
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

        $user =  User::findorFail($request->pro_id);
        $user->name = $request->name;
        $user->first_phone = $request->first_phone;
        $user->second_phone = $request->second_phone;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->save();
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));
        session()->flash('Edit', 'تم تعديل المستخدم بنجاح');
        return back()->with('success', 'User updated successfully');
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