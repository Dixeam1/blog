<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
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
    public function create(Request $request)
    {
       return view('/create'); 
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $res = new blog;
        // dd($res);
        $res->name=$request->input('name');
        $res->discription=$request->input('discription');
        $res->save();
        $request->session()->flash('msg', 'Data Successfully Submitted!');

        return redirect("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog, $id)
    {
        return view('edit')->with('blogs',blog::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog, $id)
    {
        $res =blog::find($request->id);
       $res->name=$request->input('name');
       $res->discription=$request->input('discription');
       $res->save();
       $request->session()->flash('msg', 'Data Successfully updated!');
       return redirect("home");    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog, $id)
    {
        blog::destroy(array('id', $id));
        return redirect('home');
    }
}
