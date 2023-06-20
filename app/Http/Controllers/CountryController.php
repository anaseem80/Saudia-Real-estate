<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country =  Country::all();
        return view('dashboard.country_view', ['countrys' =>  $country]);
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
            'code' => 'required|unique:countries|max:255',

        ], [

            'name.required' => 'يرجي ادخال اسم الدوله',
            'name.unique' => 'اسم الدوله مسجل مسبقا',
            'code.required' => 'يرجي ادخال كود الدوله',
            'code.unique' => 'كود الدوله مسجل مسبقا',

        ]);


        $datacountry = new Country();
        $datacountry->name = $request->name;
        $datacountry->code = $request->code;
        $datacountry->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $validatedData = $request->validate([
            'name' => 'required|unique:countries|max:255',
            'code' => 'required|unique:countries|max:255',

        ], [

            'name.required' => 'يرجي ادخال اسم الدوله',
            'name.unique' => 'اسم الدوله مسجل مسبقا',
            'code.required' => 'يرجي ادخال كود الدوله',
            'code.unique' => 'كود الدوله مسجل مسبقا',

        ]);

        $sections = Country::findOrFail($id);


        $sections->update([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        session()->flash('edit', 'تم تعديل الدوله بنجاج');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $sections = Country::findorFail($id);
        $sections->delete();
        session()->flash('delete', 'تم حذف الدوله بنجاح');
        return back();
    }
}
