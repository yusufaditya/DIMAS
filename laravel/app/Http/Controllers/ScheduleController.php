<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('schedule');
    }

    public function getData($id){
        $data = Schedule::where('id_pemilik', $id)->get();
        return response()->json($data);
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
        $status = Schedule::create([
            "title" => $request->title,
            "start" => $request->start,
            "id_pemilik" => $request->pemilik,
            "end" => $request->end,
            "allDay" => $request->allDay
        ]);

        return response(["message"=>$status]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allData = Schedule::all();
        $data = Schedule::findOrFail($id);
        $diff = date_diff(date_create($data->start),date_create($data->end));
        $i = $data->id;
        if($diff->format("%a") == "1"){
            $data->tanggal = $data->start;
        }else{
            $data->tanggal = $data->start . " - " . $data->end;
        }
        while($i !=0 ){
            $i--;
            @$data->prev_page = Schedule::where('id', $i)->where('id_pemilik', Auth::id())->first()->id;
        }
        $i = $data->id;
        $lastId = Schedule::orderBy('id','desc')->first()->id;
        while($i <= $lastId){
            $i++;
            @$data->next_page = Schedule::where('id', $i)->where('id_pemilik', Auth::id())->first()->id;
        }
        return view('schedule_detail', compact('data','allData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = Schedule::find($id);
        $user = User::find($schedule->id_pemilik);
        $diff = date_diff(date_create($schedule->start),date_create($schedule->end));
        $i = $schedule->id;
        if($diff->format("%a") == "1"){
            $schedule->tanggal = $schedule->start;
        }else{
            $schedule->tanggal = $schedule->start . " - " . $schedule->end;
        }
        return view('admin.post', compact('schedule','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->hasFile('gambar')){
            $request->validate([
              'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('gambar')->store('public/images');
            $request->gambar = $path;
            $status = Schedule::find($request->id)->update(['gambar' => $request->gambar]);
        }
        $status = Schedule::find($request->id)->update(['title'=>$request->title,'start'=>$request->start,'end'=>$request->end]);
        if($request->page == 'edit page'){
            $status = Schedule::find($request->id)->update(['title'=>$request->title,'start'=>$request->start,'end'=>$request->end,'deskripsi'=>$request->description]);
            return redirect('schedule/edit/' . $request->id)->with('success',"Data berhasi diubah!");
        }else{
            $status = Schedule::find($request->id)->update(['title'=>$request->title,'start'=>$request->start,'end'=>$request->end]);
            return response(['message'=>$status]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $status = Schedule::destroy($request->id);
        return response(['message'=>$status]);
    }

}
