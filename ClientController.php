<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientController extends Controller
{
        public function show()
    {
        $client= DB::table('clients')->get();
        return view('frontend/client/client',['client'=>$client]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client= DB::table('clients')->get();
        return view('frontend/client/create',['client'=>$client]);
    }

    public function create(Request $req)
    {
        DB::table('clients')->insert([
            'company'=>$req->company,
            'VAT'=>$req->VAT,
            'address'=>$req->address,
        ]);
        return redirect(route('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client=DB::table('clients')->find($id);
        return view('frontend/client/editform',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $client=DB::table('clients')->where('id',$id)->update([
            'company'=>$req->company,
            'VAT'=>$req->VAT,
            'address'=>$req->address,
        ]);
        return redirect(route('client'))->with('status','Updation Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clients')->where('id',$id)->delete();
        return redirect(route('client'))->with('status','Deleted Successfully!');
    }
}
