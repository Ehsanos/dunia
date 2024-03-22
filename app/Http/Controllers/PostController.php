<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $posts=Post::latest()->get();
        return view('posts.index',['posts'=>$posts]);
    }

    public function create()
    {
        $tags=Tag::all();
        if($tags->count()==0)
        {
            return redirect()->route('tags.create');
        }
        return view('posts.create' ,['tags' => $tags]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tag' => 'required',
            'photo' => 'required|image',
        ]);

        $photo=$request->photo;
        $newPhotoName=time().$photo->getClientOriginalName();
        $photo->move('uploads/posts',$newPhotoName);

        //mass assignment
        $post=Post::create([
            'tag_id'=>$request->tag,
            'title' => $request->title,
            'content' => $request->content,
            'photo' => 'uploads/posts/'.$newPhotoName,
        ]);
        // $post->tag()->attach($request->tags);
        return redirect()->back()->with('success','post added successfully');
    }

    public function show($id)
    {
        //first() مشان في حال كا في اكتر من واحد يجيب الاول

        $post=Post::where('id',$id)->first();
        $tags=Tag::all();
        return view('posts.show',['post'=>$post , 'tags'=>$tags]);
    }

    function edit($id)
    {
        $post=Post::where('id',$id)->first();
        if($post==null)
        {
            return redirect()->back();
        }
        $tags=Tag::all();
        return view('posts.edit',['post'=>$post , 'tags'=>$tags]);
    }

    public function update(Request $request, $id)
    {
        $post=Post::find($id);
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tag' => 'required',
        ]);
        if($request->has('photo'))
        {
            $photo=$request->photo;
            $newPhotoName=time().$photo->getClientOriginalName();
            $photo->move('uploads/posts/',$newPhotoName);
            $post->photo='uploads/posts/'.$newPhotoName;
        }
        $post->title= $request->title;
        $post->content= $request->content;
        $post->tag_id=$request->tag;
        $post->save();
        return redirect()->back()->with('success','post updated successfully');;
    }


    public function destroy($id)
    {
        $post=Post::where('id',$id)->first();
        if($post==null)
        {
            return redirect()->back();
        }

        
        $image_path = public_path($post->photo);
        if(File::exists($image_path)) {
            File::delete($image_path);
            echo 'File deleted successfully.';
        }
        else {
            echo 'File does not exist.';
        }
        $post->delete();
        return redirect()->back()->with('success','post deleted successfully');
    }

    public function tag_posts($tag_id)
    {
        $tag=Tag::find($tag_id);
        $posts=$tag->posts;
        return view('posts.index',['posts'=>$posts ,'tag'=>$tag->tag]);
    }
}
