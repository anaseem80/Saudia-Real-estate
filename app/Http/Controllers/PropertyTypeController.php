<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $catogerys = PropertyType::all();
        return view("dashboard.property_type_view",['catogerys' => $catogerys]);
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

        
        $validatedData = $request->validate([
            'title' => 'required|unique:property_types|max:255',
        ],[

            'title.required' =>'يرجي ادخال نوع العقار',
            'title.unique' =>'نوع العقار مسجل مسبقا',


        ]);
        $inpout = $request->all();
        $b_exist=PropertyType::where('title','=',$inpout['title'])->exists();

        if($b_exist){

            session()->flash('Erorr', 'نوع العقار موجود بالفعل');
            return back();

        }else{


                $product = new PropertyType(); 
                $product->title = $request->title; 
                $product->save();
                session()->flash('Add', 'تم اضافة نوع العقار بنجاح ');
                return back();
              
            }






        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catogery  $catogery
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyType $catogery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catogery  $catogery
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyType $catogery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catogery  $catogery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
         $request->validate([
            'title' => 'required|unique:property_types,title,'.$id,
            // 'description' => 'required|unique:catogerys,description,'.$id.',id,title,'.$request->title,
            // Add other validation rules for other fields here
        ],[
            'title.required' =>'يرجي ادخال نوع العقار',
            'title.unique' =>'نوع العقار مسجل مسبقا',
            // 'description.required' =>'يرجي ادخال وصف العقار',
            // 'description.unique' =>'وصف العقار مسجل مسبقا',
            // Add other error messages for other fields here
        ]);

        $sections = PropertyType::findOrFail($id);
        $sections->update([
            'title' => $request->title,        
        ]);

        session()->flash('edit','تم تعديل نوع العقار بنجاج');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catogery  $catogery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $sections = PropertyType::findorFail($id);
        $sections->delete();
        session()->flash('delete','تم حذف نوع العقار بنجاح');
        return back();
    }
}
