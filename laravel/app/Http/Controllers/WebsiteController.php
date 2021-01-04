<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = Paket::where('id_user', Auth::id())->whereRaw('( status = "active" OR status_pembayaran = "pending" )')->orderBy('id', 'desc')->first();
        $socialMedia = null;
        $website = null;
        $message = "Anda belum membeli plan untuk website";
        if($plan){
            if($plan->status_pembayaran == 'pending'){
                $message = "Anda belum menyelesaikan pembayaran";
                return view('dashboard.schedule', compact('socialMedia', 'website', 'message'));
            }
            switch(strtolower($plan->paket)){

                case 'bundle premium':
                    $socialMedia = $plan;
                    $website = $plan;
                    break;
                case 'bundle gold':
                    $socialMedia = $plan;
                    $website = $plan;
                    break;
                case 'bundle regular':
                    $socialMedia = $plan;
                    $website = $plan;
                    break;
                case 'web premium':
                    $website = $plan;
                    break;
                case 'web gold':
                    $website = $plan;
                    break;
                case 'web regular':
                    $website = $plan;
                    break;
                case 'social media premium':
                    $socialMedia = $plan;
                    break;
                case 'social media gold':
                    $socialMedia = $plan;
                    break;
                case 'social media regular':
                    $socialMedia = $plan;
                    break;
            }
        }
        return view('dashboard.website',compact('socialMedia','website', 'message'));
    }

    public function showListProduct(){
        $products = [];
        //$products = Product::where('id_pemilik', Auth::id())->get();

        return view('dashboard.website.list-product', compact('products'));

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
        //
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
