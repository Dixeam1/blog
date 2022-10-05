<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = [];
        $data['employeeArr'] = blog::all();
        if($request->search){
            $data['employeeArr'] = blog::where('name', 'LIKE', '%' . $request->search . '%')->orWhere('discription', 'LIKE', '%' . $request->search . '%')->get();
        }
        // dd($data['employeeArr']);

        return view('home',$data);
    }

    
}
