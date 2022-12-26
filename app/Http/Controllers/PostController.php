<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $title = 'All Post';
        $all_post = Post::all();
        return view('post/index',compact('title','all_post'));
    }

    public function create(){
        $title = 'Create Post';
        $all_category = Category::select('id','name','slug','status')->get();
        return view('post/create',compact('title','all_category'));
    }

    public function save(Request $request){
        $validator = Validator::make($request->all(), [
            'post_title' => 'required',
            'post_content' => 'required',
            'post_image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')->withErrors($validator)->withInput();
        }
        $photo = $request->file('post_image');
        $filename = uniqid('post_image_',true).Str::random(10).'.'.$photo->getClientOriginalExtension();
        if($photo->isValid()){
            $photo->move(public_path().'/uploads/post_images/',$filename);
        }
        $title = 'Create Post';
        $post_title = $request->input('post_title');
        $title_slug = Str::slug($post_title);
        $post_category = $request->input('post_category');
        $post_content = $request->input('post_content');
        $status = $request->input('status');
        $all_post = Post::all();
        $post_data = [
            'user_id'=>1,
            'category_id'=>$post_category,
            'title'=>$post_title,
            'slug'=>$title_slug,
            'content'=>$post_content,
            'thumbnail_path'=> $filename,
            'status'=> $status
        ];
        try{
            Post::create($post_data);
            session()->flash('message','Successfully Added');
            return view('post/index',compact('title','all_post'));
        }catch(Exception $e){
            session()->flash('message',$e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function details($id){
        $data = [];
        $data ['current_time'] = date('Y m d, H:m:s');
        $data ['site_title'] = "Blog";
        $data ['details_post'] = Post::where('id',$id)->get();
        // dd(Post::where('id',$id)->get());
        return view('post',compact('data'));
    }
}
