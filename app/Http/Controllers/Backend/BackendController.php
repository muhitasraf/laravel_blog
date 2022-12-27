<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Http\Request as HttpRequest;
// use Illuminate\Support\Facades\Request;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Str;

class BackendController extends Controller
{
    public function index(){
        $data = [];
        $data ['current_time'] = date('Y m d, H:m:s');
        $data ['site_title'] = "Blog";

        $category = Category::all();
        $all_post = Post::paginate(3);
        $featured_post = Post::orderBy('id','DESC')->limit(3)->get();
        $data ['category'] = $category;
        $data ['all_post'] = $all_post;
        $data ['featured_post'] = $featured_post;

        return view('index',$data);
    }

    public function post($id){
        $data = [];
        $data ['current_time'] = date('Y m d, H:m:s');
        $data ['site_title'] = "My First Blog";
        $data ['details_post'] = Post::where('id',$id)->get();
        return view('post',$data);
    }
}
