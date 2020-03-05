<?php

namespace App\Http\Controllers;

use \App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('auth')->only(['index']);
        //$this->middleware('auth')->except(['index','store']);
    }

    //list of all projects
    public function index()
    {
        //$projects = Project::all();
        $projects = Project::where('owner_id', auth()->id())->get();
        return view('index',compact('projects'));



    }

    public function create()
    {
        return view('create');
    }

    public function store(Project $project)
    {

        $data = request()->validate([
            'title' => 'required|min:3',
            'description'  => 'required|min:3',
        ]);
        //dd($data);
        //Project::create($data);
        //dd($data + ['owner_id' => auth()->id()]);
        Project::create($data + ['owner_id' => auth()->id()]);
        //$data['owner_id'] => auth()->id();


        //Cookie::queue('title', request('title'), 60);
        //$value = Cookie::get('title');

        return redirect("/project");
    }

    public function show(Project $project)
    {
        abort_if($project->owner_id !== auth()->id(), 403);
        //abort_unless($project->owner_id === auth()->id(), 403);
        // if($project->owner_id !== auth()->id()){
        //   abort(403);
        // }

        //abort_if(auth()->user()->owns($project), 403);
        return view('show',compact('project'));
    }

    public function edit(Project $project)
    {
        return view('edit',compact('project'));
    }

    public function update(Project $project)
    {
        $project->update([
          'title' => request("title"),
          'description' => request("description"),
        ]);

        return redirect("/project");
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect("/project");
    }
}
