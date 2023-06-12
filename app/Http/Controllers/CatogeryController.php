<?php

namespace App\Http\Controllers;

use App\Models\Catogery;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatogeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $catogerys = Catogery::all();
        return view("realest.catogery_view",['catogerys' => $catogerys]);
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
            'name' => 'required|unique:catogerys|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ],[

            'name.required' =>'يرجي ادخال اسم القسم',
            'image.required' =>'يرجي ادخال الصوره',
            'name.unique' =>'اسم القسم مسجل مسبقا',


        ]);
        $inpout = $request->all();
        $b_exist=Catogery::where('name','=',$inpout['name'])->exists();

        if($b_exist){

            session()->flash('Erorr', 'اسم القسم موجود بالفعل');
            return back();

        }else{
                $image = $request->file('image');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $path = $image->storeAs('catogeryimage', $filename,'Taha');

                $product = new Catogery(); 
                $product->name = $request->name; 
                $product->image_path = 'catogeryimage/'.$filename;
                $product->Created_by = Getusername();
                $product->save();
                session()->flash('Add', 'تم اضافة القسم بنجاح ');
                return back();
              
            }






        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catogery  $catogery
     * @return \Illuminate\Http\Response
     */
    public function show(Catogery $catogery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catogery  $catogery
     * @return \Illuminate\Http\Response
     */
    public function edit(Catogery $catogery)
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

        $validatedData = $request->validate([
            'name' => 'required|unique:catogerys|max:255',
            'image_path' => 'required',
        ],[

            'name.required' =>'يرجي ادخال اسم القسم',
            'image_path.required' =>'يرجي ادخال الصوره',
            'name.unique' =>'اسم القسم مسجل مسبقا',


        ]);

        $sections = Catogery::findOrFail($id);
    
        $file_path = public_path($sections->image_path);

        if(file_exists($file_path)) {
            unlink($file_path);
        }
       

        // Upload the new image file to the server 
        $image = $request->file('image_path');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs('catogeryimage', $filename,'Taha');
        $sections->update([
            'name' => $request->name,
            'image_path' => 'catogeryimage/'.$filename,
        ]);

        session()->flash('edit','تم تعديل القسم بنجاج');
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
        $sections = Catogery::findorFail($id);
        $file_path = public_path($sections->image_path);
        if(file_exists($file_path)) {
            unlink($file_path);
        }
        $sections->delete();

      
        session()->flash('delete','تم حذف القسم بنجاح');
        return back();
    }
}
