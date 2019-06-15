<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Request;
use App\Property;
use App\States;
use App\Agents;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use phpDocumentor\Reflection\DocBlock\Tags\Property;

class PropertiesController extends Controller
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
    $state = States::all();
    $agent = Agents::all();
    return view('admin/addProperty',compact('state','agent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //$input = Request::all();
        
        //Property::create($input);


        // Another way of inserting into a laravel database

       /* $property = new Property;

        $property->name = $request->input('name');
        $property->description = $request->input('description');
        $property->price = $request->input('description');
        $property->contact = $request->input('contact');
        $property->state = $request->input('state');
        if($request->has('image')){

            $image = $request->file('image');
            $folder = 'uploads/images';
            $filePath = $folder.$image->getClientOriginalExtension();
            $this->uploadOne($image,$folder,'public');
            $property->image = $filePath;
        }
        $property->save();*/

        $image = $request->file('image');
        $new_image = rand().'.'.$image->getClientOriginalExtension();
        $image-> move(public_path('uploads/images'),$new_image);
        $data = array('name' =>$request->name,
                      'description' =>$request->description,
                      'price' =>$request->price,
                      'contact' =>$request->contact,
                      'agent_id' =>$request->agent_id,
                      'state' =>$request->state,
                      'image'=>$new_image,
                 );

        Property::create($data);
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('admin.property')->with('property',$property);
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
        return view('admin/updateProperty')->with('property',$property);

        //$property = Property::findOrFail($id);
       // return view ('admin.updateProperty')->with('property',$property);
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
        $property = Property::findOrFail($id);
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

        Property::update($id,$data);
        return redirect('admin/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property::destroy($id);
        redirect('properties');
    }
}



