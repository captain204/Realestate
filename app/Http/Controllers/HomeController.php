<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Property;
use App\Agents;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::paginate(1);
        $agent =Agents::paginate(1);
        return view('property.home',compact('property','agent'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::findOrfail($id);
        $agents = Agents::where(['id'=>$property->agent_id])->get();
        return view('property.single',compact('property','agents'));
    }

    

}
