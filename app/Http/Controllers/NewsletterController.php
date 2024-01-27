<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return "Newsletters.index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        return "Newsletters.create";

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // Request $request
    {
        // return $request->all();

        //post data using Newsletter model
        Newsletter::create([
            // 'id'=> 1,
            'email'=> $request->email
            // 'confirmed' => 1
        ]);
        return "Newsletters successfully inserted";

    }

    /**
     * Display the specified resource.
     */
    public function show() // string $id
    {
        //
        $Newsletters = Newsletter::all();
        return $Newsletters;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit() // string $id
    {
        //
        return "Newsletters.edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return "Newsletters.update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return "Newsletters.destroy";

    }
}
