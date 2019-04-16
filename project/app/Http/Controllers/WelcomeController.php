<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home=view('pages.home');
        return view('master')
                ->with('main_content',$home);

    }
    public function contact()
    {

        $contact=view('pages.contact');
        return view('master')
            ->with('main_content',$contact);
    }
    public function about()
    {
        $about=view('pages.about');
        return view('master')
            ->with('main_content',$about);
    }
    public function archive()
    {
        $archive=view('pages.archive');
        return view('master')
            ->with('main_content',$archive);
    }
    public function categories()
    {
        $categories=view('pages.categories');
        return view('master')
            ->with('main_content',$categories);
    }
    public function gallery()
    {
        $gallery=view('pages.gallery');
        return view('master')
            ->with('main_content',$gallery);
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
