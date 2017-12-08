<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;


class PhotoSlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*
        $imagepaths = \DB::table('Photo')->orderBy('display_count')->limit(3)->pluck('path');
        $imageids = \DB::table('Photo')->orderBy('display_count')->limit(3)->pluck('id');

        foreach ($imageids as $imageid){
            DB::table('Photo')->where('id', $imageid)->increment('display_count');
        }

        return view('photoSlideshow.index', compact('imagepaths','imagecount'));
        */
        $photos = Photo::orderBy('display_count')
                        ->take(20)
                        ->get();
        
        foreach ($photos as $photo){
            $imagepaths[] = $photo->path;
            $photo->display_count = $photo->display_count + 1;
            $photo->save();
        }
        $imagecount = count($imagepaths);
        return view('photoSlideshow.index', compact('imagepaths','imagecount'));
        



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
