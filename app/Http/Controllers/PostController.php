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
        $all_post = Post::with('category','user')->get();
        return view('post/index',compact('title','all_post'));
    }

    public function create(){
        $title = 'Create Post';
        $all_category = Category::select('id','name','category_slug','status')->get();
        return view('post/create',compact('title','all_category'));
    }

    public function show($id){
        $title = 'Edit Post';
        $single_post = Post::with('category','user')->where('id',$id)->get();
        $all_category = Category::all();
        return view('post/show',compact('title','all_category','single_post'));
    }

    public function save(Request $request){
        $validator = Validator::make($request->all(), [
            'post_title' => 'required|unique:posts,title',
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
        $post_title = $request->input('post_title');
        $title_slug = Str::slug($post_title, '-', 'bn');
        $post_category = $request->input('post_category');
        $post_content = $request->input('post_content');
        $status = $request->input('status');
        $post_data = [
            'user_id'=>1,
            'category_id'=>$post_category,
            'title'=>$post_title,
            'post_slug'=>$title_slug,
            'content'=>$post_content,
            'thumbnail_path'=> $filename,
            'status'=> $status
        ];
        try{
            Post::create($post_data);
            session()->flash('message','Successfully Added');
            return redirect('post');
        }catch(Exception $e){
            session()->flash('message',$e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function edit($id){
        $title = 'Edit Post';
        $single_post = Post::where('id',$id)->get();
        $all_category = Category::all();
        return view('post/edit',compact('title','all_category','single_post'));
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'post_title' => 'required',
            'post_content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/edit')->withErrors($validator)->withInput();
        }
        $photo = $request->file('post_image');
        if(!empty($photo)){
            $filename = uniqid('post_image_',true).Str::random(10).'.'.$photo->getClientOriginalExtension();
            if($photo->isValid()){
                $photo->move(public_path().'/uploads/post_images/',$filename);
            }
        }else{
            $filename = $request->input('prev_post_image');
        }
        $id = $request->input('id');
        $post_title = $request->input('post_title');
        $title_slug = Str::slug($post_title);
        $post_category = $request->input('post_category');
        $post_content = $request->input('post_content');
        $status = $request->input('status');
        $post_data = [
            'user_id'=>1,
            'category_id'=>$post_category,
            'title'=>$post_title,
            'post_slug'=>$title_slug,
            'content'=>$post_content,
            'thumbnail_path'=> $filename,
            'status'=> $status
        ];
        try{
            Post::where('id',$id)->update($post_data);
            session()->flash('message','Successfully Added');
            return redirect('post');
        }catch(Exception $e){
            session()->flash('message',$e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id){
        Post::where('id',$id)->delete();
        return redirect('post');
    }

    public function details($post_slug){
        $data = [];
        $current_time = date('Y m d, H:m:s');
        $site_title = "Blog";
        $details_post = Post::with('category','user')->where('post_slug',$post_slug)->first();
        $category = Category::all();
        return view('post_details',compact('current_time','site_title','category','details_post'));
    }

    public function categoryWisePost($category_slug){
        $current_time = date('Y m d, H:m:s');
        $site_title = "My First Blog";
        $category = Category::all();
        $category_wise_post = Category::with('posts','posts.user')->where('category_slug',$category_slug)->first();
        return view('category_wise_post',compact('current_time','site_title','category','category_wise_post'));
    }

    public function search(Request $request){
        $user_search = $request->input('search');
        $current_time = date('Y m d, H:m:s');
        $site_title = "My First Blog";
        $category = Category::all();
        $search_result = Post::with('category','user')->where('title', 'like', '%' .$user_search. '%')
                        ->orWhere('content', 'like', '%' . $user_search . '%')
                        // ->orWhere('name', 'like', '%' . $user_search . '%')
                        ->paginate(5);
        return view('search_result',compact('current_time','site_title','category','search_result'));
    }
}
