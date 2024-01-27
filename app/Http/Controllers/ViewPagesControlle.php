<?php

namespace App\Http\Controllers;

use App\Models\Abc_table;
use Illuminate\Http\Request;

class ViewPagesControlle extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function digitalMarketing(){
        return view('pages.digitalmarketing');
    }

    public function webdevelopment(){
        return view('pages.webdevelopment');
    }

    public function dataanalysis(){
        return view('pages.dataanalysis');
    }

    public function collaboration(){
        return view('pages.collaboration');
    }

    public function hardwareservices(){
        return view('pages.hardwareservices');
    }

    public function eventsmanagement(){
        return view('pages.eventsmanagement');
    }

    public function contact(){
        return view('contact');
    }

    public function test(){
        // Abc_table::create([
        //     'id'=> 2,
        //     'name'=> 'rohit',
        //     'isActive' => 1
        // ]);
        // return "success";

        $Abc_table_data = Abc_table::all();
        return $Abc_table_data;
    }
}
