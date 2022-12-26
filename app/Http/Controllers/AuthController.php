<?php
namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showRegistrationForm(){
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
        return view('register',$data);
    }

    public function porcessRegistration(Request $request){

        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile_number' => 'required',
            'password' => 'required|min:6',
            'cpassword' => 'required|min:6|same:password',
            'photo' => 'required|image|max:10240',
        ]);

        if ($validator->fails()) {
            return redirect('register')->withErrors($validator)->withInput();
        }

        $photo = $request->file('photo');
        $filename = uniqid('image_',true).Str::random(10).'.'.$photo->getClientOriginalExtension();
        if($photo->isValid()){
            $photo->move(public_path().'/uploads/images/',$filename);
        }
        $data = [
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'mobile_number' => $request->input('mobile_number'),
            'address' => $request->input('address'),
            'password' => bcrypt($request->input('password')),
            'photo' => $filename,
        ];

        try{
            // DB::table('users')->insert($data);
            User::create($data);
            session()->flash('message','Successfully Registered');
            return redirect()->route('login');
        }catch(Exception $e){
            session()->flash('message',$e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function showLogin(){
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
        return view('login',$data);
    }

    public function porcessLogin(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $credential = $request->except(['_token']);
        if(auth()->attempt($credential)){
            echo 'Successfully Login';
            session()->flash('message','Successfully Login');
            return redirect()->route('profile');
        }else{
            session()->flash('message',"Email or Password doesn't match.");
            return redirect()->back()->withInput();
        }
    }

    public function logout(){
        auth()->logout();
        session()->flash('message','Successfully Login');
        return redirect()->route('login');
    }

    public function profile(){
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
        return view('profile',$data);
    }
}
