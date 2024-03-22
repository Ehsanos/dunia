<?php

namespace App\Http\Controllers;

use App\Models\GallaryImg;
use App\Models\PromoVideo;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tags=Tag::latest()->get();
        $posts=Post::latest()->get();
        $images=GallaryImg::latest()->get();
        $videos=PromoVideo::latest()->get();
        return view('index',['tags'=>$tags,'posts'=>$posts, 'images'=>$images, 'videos'=>$videos]);
    }
    public function admin()
    {
        $posts=Post::latest()->get();
        return view('admin');
    }
    public function privacy_policy()
    {
        return response()->file('privacy-policy.pdf');
    }

}