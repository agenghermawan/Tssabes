<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Exception;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index(){
        $getEvent = event::all();
        return view('Admin.Event.index',compact('getEvent'));
    }

    public function create(){
        return view('Admin.Event.create');
    }

    public function store(EventRequest $request){
        try{
            event::create([
                'name' => $request->name,
                'image' =>  $request->file('image')->storeAs('public/image', $request->file('image')->getClientOriginalName(),'public'),
                'dateEvent' => $request->dateEvent,
                'description' => $request->description,
                'organizer' => $request->organizer
            ]);
            toast('berhasil menambhkan event','success');
            return redirect()->route('event.index');
        }catch(Exception $error)
        {
            dump($error);
        }

    }

    public function delete(Request $request){
        if($request->id == null){
            toast('data yang anda hapus tidak di temukan','error');
            return back();
        }
        event::where('id',$request->id)->delete();
        toast('berhasil menghapus event','success');
        return back();
    }

    public function apiEvent()
    {
        $data = event::paginate(5);
        return response()->json([
            "meta" => [
                "code" => 200,
                "status" => "success"
            ],
            "data" => $data
        ]);
    }
}
