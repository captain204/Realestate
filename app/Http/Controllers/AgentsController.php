<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Property;
use App\Agents;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents =  Agents::paginate(6);
        return view('agents.index')->with('agents',$agents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $image = $request->file('image');
        $new_image = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/agents'),$new_image);
        $data = array('name'=>$request->name,
                      'about'=>$request->about,
                      'contact'=>$request->contact,
                      'image'=>$new_image,
                      'email'=>$request->email,
                      'facebook'=>$request->facebook,
                      'twiter'=>$request->twitter,
                      'instagram'=>$request->instagram,
            );
            Agents::create($data);
            return redirect('agent');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $agent = Agents::findOrFail($id);
     return view('agents.show',compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = Agents::findOrfail($id);
        return view('agents.edit')->with('agent',$agent);
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
        $image = $request->file('image');
        $new_image = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/agents'),$new_image);
        $data = array('name'=>$request->name,
                      'about'=>$request->about,
                      'contact'=>$request->contact,
                      'image'=>$new_image,
                      'email'=>$request->email,
                      'facebook'=>$request->facebook,
                      'twiter'=>$request->twitter,
                      'instagram'=>$request->instagram,
            );
        Agents::whereId($id)->update($data);
        return redirect('agent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agents = Agents::findOrfail($id);
        $agents->delete();
        return redirect('agent');
    }
}
