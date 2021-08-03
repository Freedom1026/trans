<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class trans extends Controller
{
    public function GetFromDB()
    {
        // $banners = DB::table('smartend_banners')
        // ->get();
        $countries = DB::table('smartend_countries')
            ->select(['id', 'title_en'])
            ->get();
        return $countries;
    }

    public function SaveToDB(Request $req)
    {
        
        DB::enableQueryLog();
        DB::table('smartend_countries')
            ->where('id', $req->k)
            ->update([
                'title_zh'=> $req->v
            ]);
        \Log::alert(DB::getQueryLog());
            return $req->v;
    }
}
