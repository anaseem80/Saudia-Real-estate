<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $country=  Country::all();
        $city=  City::all();
        return view('realest.city_view',['city'=>  $city,'country'=>  $country]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:countries|max:255',
            
        ],[
    
            'name.required' =>'يرجي ادخال اسم المدينه',
          
            'name.unique' =>'اسم المدينه مسجل مسبقا',
    
    
        ]);
        $inpout = $request->all();
        $b_exist=City::where('name','=',$inpout['name'])->exists();
    
        if($b_exist){
    
            session()->flash('Erorr', 'اسم المدينه موجود بالفعل');
            return back();
    
        }else{
           $datacountry=new City();
           $datacountry->name=$request->name;  
           $datacountry->country_id=$request->country_id;   
           $datacountry->save();
           return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'name' => 'required|unique:countries|max:255',
          //  'image' => 'required',
        ],[

            'name.required' =>'يرجي ادخال اسم المدينه',
          //  'image.required' =>'يرجي ادخال الصوره',
            'name.unique' =>'اسم المدينه مسجل مسبقا',


        ]);

        $sections = City::findOrFail($id);
    
        
        $sections->update([
            'name' => $request->name,
           
        ]);

        session()->flash('edit','تم تعديل المدينه بنجاج');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $sections = City::findorFail($id);
        $sections->delete();
        session()->flash('delete','تم حذف المدينه بنجاح');
        return back();
    }
}
