<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class BackendController extends Controller
{
    public function index(){
        $current_time = date('Y m d, H:m:s');
        $site_title = "Blog";
        $category = Category::all();
        $all_post = Post::with('category','user')->paginate(3);
        $featured_post = Post::with('category','user')->orderBy('id','DESC')->limit(3)->get();
        return view('index',compact('all_post','category','featured_post','current_time','site_title'));
    }

    public function post($id){
        $data = [];
        $data ['current_time'] = date('Y m d, H:m:s');
        $data ['site_title'] = "My First Blog";
        $data ['details_post'] = Post::where('id',$id)->get();
        return view('post',$data);
    }
}
