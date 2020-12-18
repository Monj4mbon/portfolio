<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aboutData = About::all();
        return view('about', compact('aboutData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => "required",
            'content' => "required",
            'src' => "required"
        ]);
        $newAbout = new About;
        $newAbout->title = $request->title;
        $newAbout->content = $request->content;
        $newAbout->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('images', 'public');
        $newAbout->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        $showAbout = About::all();
        return view('show_about', compact('showAbout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editAbout = About::find($id);
        return view('edit_about', compact('editAbout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newAbout = About::find($id);
        $newAbout->title = $request->title;
        $newAbout->content = $request->content;
        Storage::disk('public')->delete('images/'.$newAbout->src);
        $newAbout->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('images', 'public');
        $newAbout->save();
        return redirect('admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newAbout = About::find($id);
        $newAbout->delete();
        Storage::disk('public')->delete('images/'.$newAbout->src);
        return redirect()->back();
    }
}
