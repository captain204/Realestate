<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Request;
use App\Property;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $property = Property::all();
        //return view('admin.index',compact('property')) 
         return view('admin.index')->with('property',$property);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
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
        $properties = Property::findOrFail($id);
        //return view('admin.property')->with('property',$properties);
        return view('admin.show',compact('properties')); 
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view ('admin.edit',compact('property'));
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
        $image-> move(public_path('uploads/images'),$new_image);
        $data = array('name' =>$request->name,
                      'description' =>$request->description,
                      'price' =>$request->price,
                      'contact' =>$request->contact,
                      'state' =>$request->state,
                      'image'=>$new_image,
                 );
        Property::whereId($id)->update($data);
        return redirect('admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        return redirect('/admin');
    }
}
