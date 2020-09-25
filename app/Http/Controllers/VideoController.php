<?php

namespace App\Http\Controllers;
use App\Category;
use App\Video;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.video.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $image = $request->file('image');
//        $slug =  Str::slug($request->input('title'));
       /* if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!Storage::disk('public')->exists('video'))
            {
                Storage::disk('public')->makeDirectory('video');
            }
            $postImage = Image::make($image)->resize(480, 320)->stream();
            Storage::disk('public')->put('video/'.$imageName, $postImage);
        } else
        {
            $imageName = 'default.png';
        }*/
         // image code
        $image = $request->file('image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $video = new Video();
        $video->title = $request->input('title');
        $video->category_id = $request->input('category_id');
        $video->link = $request->input('link');
        $video->image = $imageName;
        $video->save();

        session()->flash('message', 'Hi Added.');
        return redirect()->route('admin');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
