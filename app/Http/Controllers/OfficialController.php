<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class OfficialController extends Controller
{

    public function index(){
        return view('official.index');
    }

    public function resume(){
        return view('official.resume');
    }
    public function insertproject(){
        return view('official.insertproject');
    }

    public function saveproject(Request $request){
        
        $project = new Project();
        $project->name = $request->name;
        $project->type = $request->type;
        $project->year = $request->year;
        $project->features = $request->feature;
        $project->language = $request->language;
        $project->links = $request->link;
        $project->visitable = $request->visitable;
        $project->save();

         return redirect()->route('insertproject');

    }
    public function projects(){
        $project =  Project::all();
        return view('official.projects', compact('project'));
    }

    public function official(){

    }
}