<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show()
    {
        //$project= DB::table('projects')->get();
        $project = DB::table('projects')
            ->join('clients', 'projects.client_id', '=', 'clients.id')
            ->select('projects.*', 'clients.company as client_name')->get();
        return view('frontend/projects/project',['project'=>$project]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project= DB::table('projects')->get();
        return view('frontend/projects/createproj',['project'=>$project]);
    }

    public function create(){
        $client = DB::table('clients')->get();
        return view('frontend/projects/createproj', ['client' => $client]);
    }
    public function store(Request $req)
    {

        DB::table('projects')->insert([
            'title'=>$req->title,
            'description'=>$req->description,
            'deadline'=>$req->deadline,
            'client_id'=>$req->client_id,
            'status'=>$req->status,
        ]);
        return redirect(route('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project=DB::table('projects')->find($id);
        return view('frontend/projects/editproj',['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $project=DB::table('projects')->where('id',$id)->update([
            'title'=>$req->title,
            'description'=>$req->description,
            'deadline'=>$req->deadline,
            'client_id'=>$req->client_id,
            'status'=>$req->status,
        ]);
        return redirect(route('project'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('projects')->where('id',$id)->delete();
        return redirect(route('project'));
    }
}
