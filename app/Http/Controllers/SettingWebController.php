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
        return view('dashboard.setting_web');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SettingWeb  $settingWeb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SettingWeb $settingWeb)
    {
        //
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
