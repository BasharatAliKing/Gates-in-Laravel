<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function register(Request $req){
        User::create([
          'name'=>'M.Rizwan',
          'email'=>'razi@gmail.com',
          'password'=>'12345678',
          'role'=>'guest',
        ]);
    }
    public function login(){
        return view('login');
    }
    public function loginmatch(Request $req){
        $cred=$req->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(Auth::attempt($cred)){
            return redirect()->route('dashboard');
        }
    }
    public function dashboard(){
        // if(Gate::allows('isAdmin')){
        //       return 'Hello You Are Admin!';
        // }else{
        //     return 'Access Denied !!!';
        // }
        Gate::authorize('isAdmin');
        return view('dashboard');
    }
    public function profile(int $id){
        if(Gate::allows('view-profile',$id)){
       // if(Gate::any(['view-profile','isAdmin'],$id)){
            $user=User::findorfail($id);
              return view('profile', compact('user'));
        }else{
          //  return redirect()->route('dashboard');
          abort(403);
        }
     //   Gate::authorize('view-profile',$id);
    //     $user=User::findorfail($id);
    //    // return $user;
    //      return view('profile', compact('user'));
    }
    public function post(int $id){
        $posts=Post::where('user_id',Auth::id())->get();
        //return $post;
        return view('post',compact('posts'));
    }
    public function updatepost(string $id){
        $post=Post::find($id);
        $targetuser=$post->user_id;
        Gate::authorize('update-post',$targetuser);
        return $post;
      //  return view('updatepost');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
