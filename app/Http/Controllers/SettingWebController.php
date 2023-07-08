<?php

namespace App\Http\Controllers;

use App\Models\SettingWeb;
use Illuminate\Http\Request;

class SettingWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = SettingWeb::first();
        return view('dashboard.setting_web',compact('settings'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SettingWeb  $settingWeb
     * @return \Illuminate\Http\Response
     */
    public function show(SettingWeb $settingWeb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SettingWeb  $settingWeb
     * @return \Illuminate\Http\Response
     */
    public function edit(SettingWeb $settingWeb)
    {
        //
    }

  
    public function update(Request $request)
    {
        
        $validatedData = $request->validate([
        'about_page' => 'nullable|string',
        'terms' => 'nullable|string',
        'privacy' => 'nullable|string',
        'color_primery' => 'nullable|string',
        'color_second_primery' => 'nullable|string',
        'licance_web' => 'nullable|string',
        'banner' => 'nullable|string',
     ]);
     $settingWeb = SettingWeb::first();
    
    if ($settingWeb) {
        $settingWeb->update($validatedData);
        session()->flash('edit','تم تعديل الاعدادت بنجاج');
          return redirect()->route('setting_web')->with('edit', 'تم تعديل الاعدادت بنجاح');
    } else {       
         session()->flash('Erorr','لم يتم تعديل الاعدادت');
         return redirect()->route('setting_web')->with('Erorr', 'لم يتم تعديل الاعدادت ');
    }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SettingWeb  $settingWeb
     * @return \Illuminate\Http\Response
     */
    public function destroy(SettingWeb $settingWeb)
    {
        //
    }
}