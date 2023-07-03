<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Catogery;
use App\Models\Enquiry;
use App\Models\Property;
use App\Models\Report;
use App\Models\Setting;
use App\Models\SettingWeb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebControlle extends Controller
{
    public function index()
    {
        // Query to retrieve the most countries where properties are established

        $propertiesviews = Property::orderBy('views', 'desc')->get();

        $blogs = Blog::limit(2)->get();
        $catogerys = Catogery::all();
        return view(
            'front_end.home',
            [

                'propertiesviews' => $propertiesviews,

                'catogerys' => $catogerys,
                'blogs' => $blogs
            ]
        );
    }
    public function topView()
    {
        $propertiesviews = Property::orderBy('views', 'desc')->get();
        $catogerys = Catogery::all();
        return view(
            'dashboard.more_view',
            [

                'property' => $propertiesviews,
                'catogerys' => $catogerys

            ]
        );
    }

    public function newProperty()
    {
        $newProperties = Property::orderBy('created_at', 'desc')->where('status', 1)->get();
        $catogerys = Catogery::all();
        return view(
            'dashboard.more_view',
            [

                'property' => $newProperties,
                'catogerys' => $catogerys

            ]
        );
    }
    public function detalisscreen($id)
    {

        $property = Property::with('property_details', 'images', 'user', 'catogery')->find($id);
       
        if (!$property)
        {
            return response()->json(['error' => 'Property not found'], 404);
        }
       
        return view('front_end.property-details', ['property' => $property]);



    }

    public function moreproperty($country)
    {
        $property = Property::where('country', $country)->get();
        $catogerys = Catogery::all();


        return view(
            'dashboard.more_view',
            [
                'property' => $property,
                'catogerys' => $catogerys
            ]
        );



    }

    public function search($sea)
    {
        $property = Property::where('name', $sea)->get();

        $catogerys = Catogery::all();

        return view('dashboard.more_view', [
            'property' => $property,
            'catogerys' => $catogerys
        ]);



    }

    public function morepropertyCato($catogery)
    {
        $property = Property::where('catogerie_id', $catogery)->get();

        $catogerys = Catogery::all();

        return view('dashboard.more_view', [
            'property' => $property,
            'catogerys' => $catogerys
        ]);



    }


    public function privecyPage()
    {

        $setting = SettingWeb::select('terms')->first();



        return view('front_end.privacy-policy', ['setting' => $setting]);



    }
    public function aboutpage()
    {

        $setting = SettingWeb::select('about_page')->first();



        return view('front_end.about', ['setting' => $setting]);



    }    
    public function contactPage()
    {

        $setting = Setting::first();
        return view('front_end.contact', ['setting' => $setting]);

    }
    public function terms()
    {

        $catogerys = Catogery::all();


        return view(
            'dashboard.terms',
            ['catogerys' => $catogerys]
        );



    }
    public function addreport(Request $request)
    {


        $report = new Report();
        $report->username = $request->name;
        $report->userphone = $request->phone;
        $report->useremail = $request->email;
        $report->description = $request->message;
        $report->property_id = $request->property_id;
        $report->save();




        session()->flash('delete', 'تم ارسال الابلاغ بنجاح');
        return back();
    }
    public function addenqueris(Request $request)
    {
        $enquiry = new Enquiry();
        $enquiry->username = $request->name;
        $enquiry->userphone = $request->phone;
        $enquiry->useremail = $request->email;
        $enquiry->description = $request->message;
        $enquiry->property_id = $request->property_id;
        $enquiry->save();
        session()->flash('Add', 'تم ارسال الاستعلام بنجاح');
        return back();
    }

}