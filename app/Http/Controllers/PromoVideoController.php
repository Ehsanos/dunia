<?php

namespace App\Http\Controllers;

use App\Models\PromoVideo;
use Illuminate\Http\Request;

class PromoVideoController extends Controller
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
        return view('gallary.create_video');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
        ]);

       
        //mass assignment
        PromoVideo::create([
            'link'=>$request->link,
        ]);
        // $post->tag()->attach($request->tags);
        return redirect()->back()->with('success','video added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(PromoVideo $promoVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PromoVideo $promoVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PromoVideo $promoVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PromoVideo $promoVideo)
    {
        //
    }
}
