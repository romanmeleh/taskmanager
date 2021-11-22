<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
        $statuses = Status::orderBy('created_at','desc')->paginate(10);

        return  view('status.index')->with(['statuses'=>$statuses]);

    }
    public function create(){
        return view('status.create');
    }
    public  function save(StatusRequest $request){
        $status = new Status();
        $status->name = $request->name;
        $status->sort = $request->sort;
        $status->created_at = now();
        $status->save();

        return  redirect()->route('statuses');

    }
    public  function delete($id){

        $status = Status::find($id);

        $status->delete();

        return redirect()->route('statuses');
    }
    public  function edit($id){

        $status = Status::find($id);


        return view('status.edit')->with(['status'=>$status]);

    }
    public  function update($id,StatusRequest $request){

        $status = Status::find($id);
        $status->name  = $request->name;
        $status->sort = $request->sort;
        $status->updated_at = now();
        $status->update();
        return redirect()->route('statuses');

    }


}
