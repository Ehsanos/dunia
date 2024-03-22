<?php

namespace App\Http\Controllers;

use App\Models\GallaryImg;
use Illuminate\Http\Request;

use App\Models\Tag;
use Illuminate\Support\Facades\File;
class GallaryImgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags=Tag::all();
        if($tags->count()==0)
        {
            return redirect()->route('tags.create');
        }
        return view('gallary.create_image' ,['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'tag' => 'required',
            'photo' => 'required|image',
        ]);

        $photo=$request->photo;
        $newPhotoName=time().$photo->getClientOriginalName();
        $photo->move('assets/images/gallary',$newPhotoName);

        //mass assignment
        $img=GallaryImg::create([
            'tag_id'=>$request->tag,
            'title' => $request->title,
            'photo' => 'assets/images/gallary/'.$newPhotoName,
        ]);
        // $post->tag()->attach($request->tags);
        return redirect()->back()->with('success','image added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(GallaryImg $gallaryImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GallaryImg $gallaryImg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GallaryImg $gallaryImg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GallaryImg $gallaryImg)
    {
        //
    }
}
