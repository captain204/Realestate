<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Posts;
use App\Replies;
use Session;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       // $posts = Posts::all();
        $posts = Posts::where(['category'=>'general'])->get();
        $user = auth()->user();
        if($user){
            Session::put('user',$user);
            Session::put('username',$user->name);
            Session::put('id',$user->id);     
        }
        Session::flash('forum','Welcome to open house forum');
       return view('forum.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $data = array(

                'title'=>$request->title,
                'user'=>$request->user_id,
                'body'=>$request->body,
                'category'=>$request->category,
        );

        Posts::create($data);
        redirect('forum.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::findOrfail($id);
        $reply = Replies::where(['posts_id'=>$post->id])->get();
        return view('forum.show',compact('post','reply'));
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
    
    }

    public function reply($id){
        $post = Posts::findOrfail($id);
        return view('forum.reply',compact('post'));
    }

    public function postReply(Request $request){

        $data = array(

            'posts_id'=>$request->post_id,
            'reply'=>$request->body,
            'user_id'=>$request->user_id,
            
    );
        $id = $request->post_id;
        Replies::create($data);
       // redirect('forum.show/$id');
       echo "reply posted succesfully";

    }


    // Mortgaages category

    public function mortgages(){

        $posts = Posts::where(['category'=>'mortgages'])->get();
        return view('forum.mortgages/index',compact('posts'));
    }
    
    public function mortgages_create(){
        $user = auth()->user();
        if ($user){
            return view('forum.mortgages.create');    
        } else{
            Session::flash('login','You have to log in first to create post');
            return redirect('mortgages');
        }
        
    }

    public function mortgages_show($id){

        $post = Post::findOrFail($id);
        $reply = Replies::where(['posts_id'=>$post->id])->get();
        return view('forum.show',compact('post','reply'));

    }

    // Deals category

    public function deals(){

        $posts = Posts::where(['category'=>'deals'])->get();
        return view('forum.deals/index',compact('posts'));
    }

    public function deals_create(){
        $user = auth()->user();
        if ($user){
            return view('forum.deals.create');
        } else{
            Session::flash('login','You have to log in first to create post');
            return redirect('deals');
        }
    }
    
    public function deals_show($id){

        $post = Posts::findOrfail($id);
        $reply = Replies::where(['post_id'=>$post->id])->get();
        return view('forum.show',compact('post','reply'));
    }

    // Events category

    public function events(){
        $posts = Posts::where(['category'=>'events'])->get();
        return view('forum.events/index',compact('posts'));
    }

    public function events_create(){
        $user = auth()->user();
        if ($user){
            return view('forum.events.create');
        } else{
            Session::flash('login','You have to log in first to create post');
            return redirect('events');
        }
    }

    public function events_show($id){

        $post = Posts::findOrfail($id);
        $reply = Replies::where(['post_id'=>$post->id])->get();
        return view('forum.show',compact('post','reply'));
    }

     // Careers category

    public function careers(){
        $posts = Posts::where(['category'=>'careers'])->get();
        return view('forum.careers/index',compact('posts'));
    }

    public function careers_create(){
        
        $user = auth()->user();
        if ($user){
            return view('forum.careers.create');
        } else{
            Session::flash('login','You have to log in first to create post');
            return redirect('careers');
        }

    }

    public function careers_show($id){

        $post = Posts::findOrfail($id);
        $reply = Replies::where(['post_id'=>$post->id])->get();
        return view('forum.show',compact('post','reply'));
    }



}

