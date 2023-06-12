<?php

namespace App\Http\Controllers;

use App\Models\Catogery;
use App\Models\Enquiry;
use App\Models\Facility;
use App\Models\Image;
use App\Models\Property;
use App\Models\PropertyDetalis;
use App\Models\Report ;
use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function dashboarddata()
     {
        $totalProperties = Property::count();
        $totaldontProperties = Property::where('status',0)-> count();
        $totalUsers = User::count();      
        $totalQueries = Enquiry::count();
        $totalReports = Report::count();
        $totalCountries = User::select('country')->whereNotNull('country')->distinct()->count();
        $last5Customers = Enquiry::orderBy('created_at', 'desc')->take(5)->get();  
        $mostCountries = DB::table('properties')
            ->select(Property::raw('count(*) as count, country'))
            ->groupBy('country')
            ->orderBy('count', 'desc')
            ->limit(4)
            ->get();

            $mostuserCountries = DB::table('users')
            ->select(Property::raw('count(*) as count, country'))
            ->groupBy('country')
            ->orderBy('count', 'desc')
            ->limit(4)
            ->get();
            


          


            $highestQueriedProperty = DB::table('properties')
            ->join('enquiries', 'properties.id', '=', 'enquiries.property_id')
            ->select('properties.id', 'properties.name', 'properties.views',   'properties.country', 'properties.catogerie_id', 'properties.user_id', 'properties.created_at', DB::raw('count(enquiries.id) as inquiry_count'))
            ->groupBy('properties.id', 'properties.name', 'properties.views',  'properties.country', 'properties.catogerie_id', 'properties.user_id', 'properties.created_at')
            ->orderBy('inquiry_count', 'desc')->limit(5)
            ->get();

            $mostViewedProperties = DB::table('properties')
            ->orderBy('views', 'desc')->limit(5)
            ->get();


            $highestReportedProperty = DB::table('properties')
            ->join('reports', 'properties.id', '=', 'reports.property_id')
            ->select('properties.id', 'properties.name', 'properties.views',  'properties.country', 'properties.catogerie_id', 'properties.user_id', 'properties.created_at', DB::raw('count(reports.id) as report_count'))
            ->groupBy('properties.id', 'properties.name', 'properties.views',   'properties.country', 'properties.catogerie_id', 'properties.user_id', 'properties.created_at')
            ->orderBy('report_count', 'desc')->limit(5)
            ->get();

      


            // "id": 15,
            // "name": "شاليه وليد سليمان",
            // "picture": "public/property/i.png",
            // "country": "الشارقه",
            // "status": 1,
            // "views": 500,
            // "recommended": 0,
            // "catogerie_id": 2,
            // "user_id": 1,
            // "created_at": "2023-02-09 08:07:42",
            // "updated_at": "2023-02-10 18:07:42"






         return response()->view('realest.dashboard',[

            'totalProperties' => $totalProperties,
            'totaldontProperties' => $totaldontProperties,
            'totalUsers'=>$totalUsers, 
            'totalReports'=>$totalReports,
            'totalQueries' => $totalQueries,
            // 'totalreports'=>$totalreports,
            'totalCountries'=>$totalCountries,
            'last5Customers'=>$last5Customers,
            'mostCountries'=>$mostCountries, 
            'mostuserCountries' => $mostuserCountries,


            'highestQueriedProperty'=>$highestQueriedProperty,
            'mostViewedProperties'=>$mostViewedProperties, 
            'highestReportedProperty' => $highestReportedProperty,




         ]);
     }
 




    public function index()
    {
        $catogery = Catogery::all();
        $property = Property::all()->where('status',1);
        return view('realest.property_view', ['propertydata' => $property,'catogery'=>$catogery]);
    }    public function test()
    {
       
        return view('realest.test');
    }

    public function ads()
    {

        $property = Property::all()->where('status',0);
        return view('realest.propertyads_view', ['propertydata' => $property]);
    }




    public function indexinsertweb()
    {
        $dataCatogery = Catogery::all();
        return view('realest.property_insert_web',['catogerys' => $dataCatogery]);
    }






    public function indexinsert()
    {
        $dataCatogery = Catogery::all();
        return view('realest.property_insert_view',['catogery' => $dataCatogery]);
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
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'catogerie_id' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'space' => 'required|numeric',
            'numbeer_room' => 'required|integer',
            'property_direction' => 'required|string',
            'numbeer_toilet' => 'required|integer',
           // 'classification' => 'required|string',
            // 'seller_phone' => 'string',
            "Rental_term"=> 'required|string',
            'address' =>'required|string',
          //  "classification"=> "volvo",
            'images.*' => 'required|image|max:2048',

        ],[
            'name.required' =>'يرجي ادخال اسم العقار',
            'image.required' =>'يرجي ادخال الصوره',
            'images.required' =>'يرجي ادخال الصوره',
            'country' => 'يرجي ادخال المدينه',
            'catogerie_id' => 'يرجي ادخال نوع العقار',
            'price' => 'يرجي ادخال السعر',
            'description' => 'يرجي ادخال الوصف',
            'space' => 'يرجي ادحال المساحه',
            'numbeer_room' => 'يرجي ادخال عدد الغرف',
            'property_direction' => 'يرجي ادحال الاتجاه',
            'numbeer_toilet' => 'يرجي ادخال عدد الحمامات',    
            'address' =>'يرجي ادخال العنوان',
            'Rental_term' =>'يرجي ادخال المده',
          // 'images.required' =>'يرجي ادخال الصوره',
           'space.numeric' =>'يرجي ادخال المساحه عدد وليس اي شئ اخر',
           'price.numeric' =>'يرجي ادخال السعر عدد وليس اي شئ اخر',

        ]);   
        $imagessss = $request->file('images');
      
        $filename = time().'.'.$imagessss[0]->getClientOriginalExtension();
        $path = $imagessss[0]->storeAs('catogeryimage', $filename,'Taha');//اسم الفولدر /اسم الملف /disksال 
        ///
        $property = new Property(); 
        $property->name = $request->name; 
        $property->views = 0; 
        $property->country = $request->country; 
        $property->catogerie_id = $request->catogerie_id; 
        $property->user_id = Getuserid();  
        $property->picture =$path;
        if (Auth::User()->user_type=='admin') {
            $property->status =1; 
        } else {
            $property->status =0; 
        }
        
        $property->save();


        $propertyDetalis = new PropertyDetalis(); 
        $propertyDetalis->price = $request->price; 
        $propertyDetalis->description = $request->description; 
        $propertyDetalis->space = $request->space; 
      //  $propertyDetalis->numbeer_toilet = $request->name; 
        $propertyDetalis->numbeer_room = $request->numbeer_room; 
        $propertyDetalis->property_direction = $request->property_direction; 
        $propertyDetalis->numbeer_toilet = $request->numbeer_toilet; 
        $propertyDetalis->longitude = "35.89999"; 
        $propertyDetalis->latitude = "37.8888"; 
      //  $propertyDetalis->classification = $request->classification; 
        $propertyDetalis->seller_phone = $request->country; 
        $propertyDetalis->property_id = $property->id;
        $propertyDetalis->Rental_term = "1.55"; 
      //  $propertyDetalis->picture = 'catogeryimage/'.$filename;
        $propertyDetalis->building_type = 'سكني';
        $propertyDetalis->save();

        
       
        foreach($imagessss as $image) {
        $randomNumber = mt_rand();
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs('catogeryimage', "$randomNumber".$filename,'Taha');
        $image = new Image(); 
        $image->image_path = $path;
        $image->property_id = $property->id;
        $image->save();
        }


        foreach ($request->future as $fut) { 
            $model = new Facility();
            $model->facility = $fut;
            $model->property_id = $property->id;
            $model->save();
        }





        session()->flash('Add', 'تم اضافة العقار بنجاح ');
        // $dataCatogery = Catogery::all();
        // return redirect('realest.property_insert_view',['catogery' => $dataCatogery]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id=$request->id;
        $property = Property::with('property_details', 'images', 'facilities','user','catogery')->find($id);

        if (!$property) {
            return response()->json(['error' => 'Property not found'], 404);
        }

       return view('realest.property_insert_detalis', ['property' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $user =  Property::findorFail($request->id);
        $user->status = 1; 
        $user->save();
        session()->flash('Edit', 'تم قبول الاعلان بنجاح');
        return back();
        
    }



    public function filterweb(Request $request)
     {
         $query = Property::query();
 
         // Apply filter by country
         if ($request->has('country')) {
             $query->where('country', $request->input('country'));
         }
 
         // Apply filter by status
         if ($request->has('status')) {
             $query->where('status', $request->input('status'));
         }
 
         // Apply filter by category
         if ($request->has('category_id')) {
             $query->where('category_id', $request->input('category_id'));
         }
 
         // Apply filter by rental term
         if ($request->has('rental_term')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('rental_term', $request->input('rental_term'));
             });
         }
 
         // Apply filter by building type
         if ($request->has('building_type')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('building_type', $request->input('building_type'));
             });
         }
 
         // Apply filter by property direction
         if ($request->has('property_direction')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('property_direction', $request->input('property_direction'));
             });
         }
 
         // Apply filter by number of rooms
         if ($request->has('numbeer_room')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('numbeer_room', $request->input('numbeer_room'));
             });
         }
 
         // Apply filter by number of toilets
         if ($request->has('numbeer_room')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('numbeer_room', $request->input('numbeer_room'));
             });
         }
     // Apply filter by price range
        if ($request->has('price_min') && $request->has('price_max')) {
            $query->whereHas('property_details', function ($q) use ($request) {
                $q->whereBetween('price', [$request->input('price_min'), $request->input('price_max')]);
            });
        }
            $properties = $query->where('status',1)->paginate(10);
            $catogery = Catogery::all();
            return view('realest.more_view',['property' => $properties,'catogerys' => $catogery]);  
        }
    





    public function recommended(Request $request)
    {
        $user =  Property::findorFail($request->id);
        if ($user->recommended == 0) {
            $user->recommended = 1; 
            $user->save();
            session()->flash('Edit', 'تم اضافة العقار الي الموصي به بنجاح');
        } else {
            $user->recommended = 0; 
            $user->save();
            session()->flash('delete', 'تم حذف العقار من الموصي به بنجاح');
        }

        return back();
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $property = Property::findOrFail($request->pro_id);
        $property->delete();
        session()->flash('delete', 'تم حذف العقار بنجاح');
        return back();
    }
}
