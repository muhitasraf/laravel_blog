<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
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
        $data ['links'] = [
            'Facebook' => 'facebook.com',
            'Twtiter' => 'twtiter.com',
            'Youtube' => 'youtube.com',
            'Linkdin' => 'linkdin.com',
            'Instagram' => 'instagram.com'
        ];
        
        return view('index',$data);
    }

    public function post(){
        $data = [];
        $data ['current_time'] = date('Y m d, H:m:s');
        $data ['site_title'] = "My First Laravel Blog";
        $data ['links'] = [
            'Facebook' => 'facebook.com',
            'Twtiter' => 'twtiter.com',
            'Youtube' => 'youtube.com',
            'Linkdin' => 'linkdin.com',
            'Instagram' => 'instagram.com'
        ];
        $data['post'] = [
            'title' => 'This is a title',
            'created_at' => '1 January 2022',
            'description' => "<p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                            <hr>
                            <p>Cum sociis natoque penatibus et magnis <a href='#'>dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                            <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </blockquote>
                            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                            <h2>Heading</h2>
                            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <h3>Sub-heading</h3>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <pre><code>Example code block</code></pre>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                            <h3>Sub-heading</h3>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                            "
        ];
        return view('post',$data);
    }
} 