<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Catogery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $blogs = Blog::all();
        $catogerys= Catogery::all();
        return view('realest.blog',['blogs'=>$blogs, 'catogerys'=>  $catogerys,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $blogs = Blog::with('user')->get();
        return response()->view('realest.blogdash',['blogs'=>$blogs]);
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
            'title' => 'required',
          
            'content' => 'required',
            'image' => 'required|image|max:2048',
        ]);
        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs('catogeryimage', $filename,'Taha');


        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = "request->slug";
        $blog->content = $request->content;
        $blog->image = $path;
        $blog->user_id = auth()->user()->id;
        $blog->save();
        session()->flash('Add', 'تم اضافة القسم بنجاح ');
        return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        $catogerys= Catogery::all();
        return view('realest.singleblog', ['blogs'=>$blog, 'catogerys'=>  $catogerys]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
  

        $blog = Blog::find($request->id);
      
        if ($request->hasFile('image')) {
            $file_path = public_path($request->image);

            if(file_exists($file_path)) {
                unlink($file_path);
            }
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('catogeryimage', $filename,'Taha');
            $blog->image = $path;
        }
        $blog->title = $request->title;
        $blog->slug = "request->slug";
        $blog->content = $request->content;
        $blog->user_id= auth()->user()->id;
       
        $blog->save();
        session()->flash('edit','تم تعديل القسم بنجاج');
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
     
       $blog = Blog::find($request->id);
     
       $file_path = public_path($blog->image);
       if(file_exists($file_path)) {
           unlink($file_path);
       }
       $blog->delete();

     
       session()->flash('delete','تم حذف القسم بنجاح');
       return back();
    }
}
