<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $startDate = date('Y-m-d H:i:s');
        $futureDate = date('Y-m-d H:i:s', strtotime('+1 year', strtotime($startDate)) );
        $plan = [
            [
                "nama_plan" => "Bundle Premium",
                "deskripsi" => "Bundle Premium mendapatkan fitur bla bla bla",
                "harga" => 5500000
            ],[
                "nama_plan" => "Bundle Gold",
                "deskripsi" => "Bundle Premium mendapatkan fitur bla bla bla",
                "harga" => 4000000
            ],[
                "nama_plan" => "Bundle Regular",
                "deskripsi" => "Bundle Premium mendapatkan fitur bla bla bla",
                "harga" => 3000000
            ],[
                "nama_plan" => "Website Premium",
                "deskripsi" => "Website Premium mendapatkan fitur bla bla bla",
                "harga" => 3000000
            ],[
                "nama_plan" => "Website Gold",
                "deskripsi" => "Website Premium mendapatkan fitur bla bla bla",
                "harga" => 2000000
            ],[
                "nama_plan" => "Website Regular",
                "deskripsi" => "Website Premium mendapatkan fitur bla bla bla",
                "harga" => 1000000
            ],[
                "nama_plan" => "Social Media Premium",
                "deskripsi" => "Social Media Premium mendapatkan fitur bla bla bla",
                "harga" => 3000000
            ],[
                "nama_plan" => "Social Media Gold",
                "deskripsi" => "Social Media Premium mendapatkan fitur bla bla bla",
                "harga" => 2000000
            ],[
                "nama_plan" => "Social Media Regular",
                "deskripsi" => "Social Media Premium mendapatkan fitur bla bla bla",
                "harga" => 1000000
            ],
        ];
        $i = 0;
        switch(strtolower($request->paket)){

            case 'bundle premium':
                $i = 0;
                break;
            case 'bundle gold':
                $i = 1;
                break;
            case 'bundle regular':
                $i = 2;
                break;
            case 'web premium':
                $i = 3;
                break;
            case 'web gold':
                $i = 4;
                break;
            case 'web regular':
                $i = 5;
                break;
            case 'social media premium':
                $i = 6;
                break;
            case 'social media gold':
                $i = 7;
                break;
            case 'social media regular':
                $i = 8;
                break;
        }
        Paket::updateOrCreate(['id_user' => Auth::id()],
        [
            'paket' => $plan[$i]['nama_plan'], 
            'tema' => $request->tema,
            'durasi' => $futureDate,
            'deskripsi' => $plan[$i]['deskripsi'],
            'harga' => $plan[$i]['harga'],
            'status_pembayaran' => 'pending',
            'status' => 'inactive',
            'jenis_pembayaran' => $request->payment 
        ]);
        return response(['keterangan' => 'Success', 'message' => 'Pembelian plan berhasil!', 'status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
