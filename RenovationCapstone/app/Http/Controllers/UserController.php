<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\users;
use App\Models\contents;
use App\Models\estimates;
use App\Models\services;
use App\Models\favorites;



class UserController extends Controller
{

    /**
     * Welcome Page
     */

    public function welcome(){
        if(session('LoggedAdmin')){
            $user = users::find(session('LoggedAdmin'));
            return view('welcome',['user'=>$user]);
        } else if(session('LoggedEmployee')){
            $user = users::find(session('LoggedEmployee'));
            return view('welcome',['user'=>$user]);
        } else if(session('LoggedUser')){
            $user = users::find(session('LoggedUser'));
            return view('welcome',['user'=>$user]);
        } else {
            return view('welcome',['nouser'=>'no']);
        }
    }

    /**
     * Register Form
     */
    public function registerForm(){
        return view('User.register');
    }

    /**
     * Register User
     */
    public function registerUser(Request $request){
        $request->validate([
            'email' => 'unique:users,email',
        ]);

        $data = $request->all();
        $data['password'] = \Hash::make($request->password);
        $new = users::create($data);

        if($new){
            return redirect()->back()->with('Success','Registration Successfull! You can login now!');
        } else {
            return redirect()->back()->with('Fail','Something went Wrong!');
        }
    }


    /**
     * User Login form
     */

     public function loginPage(){
        if(!session('LoggedAdmin') || !session('LoggedUser') || !session('LoggedEmployee')){
            return view('User.login');
        } else {
            return route('/');
        }
     }

     /**
      * Login
      */

      public function login(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required'
        ]);

        $user = users::where('email',$request->email)->first();
        if($user->role == 'Admin'){
            $request->session()->put('LoggedAdmin',$user->id);
            return view('welcome',['user'=>$user]);
        } else if($user->role == 'Employee'){
            $request->session()->put('LoggedEmployee',$user->id);
            return view('welcome',['user'=>$user]);
        } else if($user->role == 'User'){
            $request->session()->put('LoggedUser',$user->id);
            return view('welcome',['user'=>$user]);
        }
    }


    /**
     * Logout Usr
     */
    public function logout(){
        if(session('LoggedAdmin')){
            session()->pull('LoggedAdmin');
            return view('user.login');

        }else if(session('LoggedUser')){
            session()->pull('LoggedUser');
            return view('user.login');

        }else if(session('LoggedEmployee')){
            session()->pull('LoggedEmployee');
            return view('user.login');

        }else{
            return view('errors.404');
        }
    }



    /**
     * Update Form
     */
    public function updateForm($id){
        $data = users::find($id);
        return view('');
    }

    public function updateUser(Request $request, $id){

    }


    /**
     * Delete User
     */
    public function deletePage($id){
        $data = users::find($id);
        return view('User.delete-user',["data"=>$data]);
    }


    public function delete($id){
        $data = users::find($id);
        $data->delete();
        return redirect()->route('dashboard');
    }


    /**
     * Admin Dashboard
     */

     public function dashboard(){
        $user = users::find(session('LoggedAdmin'));
        $content = contents::select('contents.*', 'services.name')
                            ->join('services', 'contents.service_id', '=', 'services.id')
                            ->get();
        $users = users::all();
        $estimates = estimates::select('estimates.*', 'services.name')
        ->join('services', 'estimates.service_id', '=', 'services.id')
        ->get();
        $services = services::all();

        if(session('LoggedAdmin')){
            return view('Admin.dashboard',['content'=>$content, 'services'=>$services, 'user'=>$user, 'users'=>$users, 'estimates'=>$estimates]);
        }else{
            return view('errors.403');
        }
     }



     /**
      * Admin - User Update
      */
     public function editUser($id){
        $user = users::find($id);
        return view('Admin.edit-user', ['data'=>$user]);
     }

     /**
      * Admin - user update savvbe
      */

     public function editingUser(Request $request, $id){
        $user = users::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->address = $request->address;
        $user->save();
        return redirect()->back()->with('Success','User Updated Successfully');
     }



     /**
      * User Self Update
      */
     public function user_update(){
        $user = users::find(session('LoggedUser'));
        return view('User.update-user',['data'=>$user]);
     }



     /**
      * User Self update save
      */

     public function user_updating(Request $request){
        $user = users::find(session('LoggedUser'));
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->back()->with('Success','Changes have been saved!');
     }



     /**
      * User Profile
      */
     public function profile(){
        $user = users::find(session('LoggedUser'));
        $favourites = favorites::select('favorites.*', "contents.*")
                            ->join('contents', 'favorites.content_id', '=', 'contents.id')
                            ->join('users', 'favorites.user_id','=','users.id')
                            ->get();
        return view('User.profile',["user"=>$user, "favorites"=>$favourites ]);
     }


}
