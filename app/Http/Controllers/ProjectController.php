<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectData = Project::all();
        return view('project', compact('projectData'));
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
            'name' => "required",
            'text' => "required",
            'src' => "required"
        ]);
        $newProject = new Project;
        $newProject->name = $request->name;
        $newProject->text = $request->text;
        $newProject->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('images', 'public');
        $newProject->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $showProject = Project::all();
        return view('show_project', compact('showProject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editProject = Project::find($id);
        return view('edit_project', compact('editProject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $newProject = Project::find($id);
        $newProject->name = $request->name;
        $newProject->text = $request->text;
        Storage::disk('public')->delete('images/'.$newProject->src);
        $newProject->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('images', 'public');
        $newProject->save();
        return redirect('admin/project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newProject = Project::find($id);
        $newProject->delete();
        Storage::disk('public')->delete('images/'.$newProject->src);
        return redirect()->back();
    }
}
