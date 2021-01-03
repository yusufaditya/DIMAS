<?php

use Illuminate\Support\Facades\Auth;
use \App\Models\Paket;
function checkPackageExpiration(){
    if(Auth::user() != null){
        $paket = Paket::where('id_user', Auth::user()->id)->orderBy('created_at','desc')->first();
        if(!empty($paket)){
            if($paket->durasi < date('Y-m-d H:i:s')){
                Paket::Where('id', $paket->id)
                ->update(['status'=>'inactive', 'status_pembayaran' => '']);
            }
        }
    }
}