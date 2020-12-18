<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use Illuminate\Http\Request;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('présentation');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $presentationData = Presentation::all();
        return view('présentation', compact('presentationData'));
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
        ]);
        $newPresentation = new Presentation;
        $newPresentation->title = $request->title;
        $newPresentation->content = $request->content;
        $newPresentation->save();
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function show(Presentation $presentation)
    {
        $presentationData = Presentation::all();
        return view('show_présentation', compact('presentationData'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editPresentation = Presentation::find($id);
        return view('edit_présentation', compact('editPresentation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newPresentation = Presentation::find($id);
        $newPresentation->title = $request->title;
        $newPresentation->content = $request->content;
        $newPresentation->save();
        return redirect('admin/presentation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newPresentation = Presentation::find($id);
        $newPresentation->delete();
        return redirect()->back();
    }
}
