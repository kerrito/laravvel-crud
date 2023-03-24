<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Newuser;

class mycontroller extends Controller
{
    // Function for viewing login page
    public function login_view()
    {
        // checking through seesion if user if already login
        if(session()->has('login')){

            // if user is already login then send it to home page 
            return redirect('/')->with('error','You are already login');
        }

        // if user is not login then send to login page
        return  view('login');
    }

    // Function to login user
    public function Auth_login(Request $req)
    {
        // Fecthing all data from table through model 
        $user=Newuser::all();

        // Fetching email through Request from login form
        $email=$req->email;

        // Fetching password through Request from login form and converting into Hash form
        $pass=Hash::make($req->pass);

        // Now using foreach loop to iterate our data from table
        foreach($user as $value){

            // Now matching email and password from login form with data from our Database table
            if($value->email=$email && $value->pass=$pass){

                // Upon matching credtianls making session true
                $req->session()->put('login','true');

                // Now redirecting to Home page
                return  redirect('/');

                // breaking loop
                break;
            }
        }

        // if credtianls donn't matches then redirecting to login page with message
        return redirect('login')->with('error','Invalid Email Or Password');
    }

    // Function for viewing home page
    public function home()
    {
        
        // checking through seesion if user is login
        if(session()->has('login')){

            // Fecthing all data from table through model
            $users=Newuser::all();

            // Now redirecting to Home page with all data
            return  view('home',['data'=>$users]);

        }else{

            // if user is not login then send to login page
            return redirect('login')->with('error','You need to login first');
        }
    }

    // Function for viewing Signup page
    public function signup_view()
    {

        // checking through seesion if user is login
        if(session()->has('login')){

            // if user is already login then send it to home page 
            return redirect('/')->with('error','You are already login');;
        }

        
        // if user is not login then send to signup page
        return view('signup');
    }

    // Function to register new user
    public function register(Request $req)
    {

        // Creating new object using model 
        $user=new Newuser;

        // Fetching name through Request from signup form
        $user->name=$req->name;

        // Fetching Email through Request from signup form
        $user->email=$req->email;

        // Fetching Address through Request from signup form
        $user->address=$req->address;

        // Fetching Password through Request from signup form
        $user->password=Hash::make($req->pass);

        // Saving credtianls with save() method in our Database 
        $user->save();

        // checking id session alredy exists
        if(!session()->has('login')){

        // Upon Saving credtianls making session true
        $req->session()->put('login','true');
        }

        // Redirecting to home page
        return redirect('/')->with('msg','Created new user successfully');
    }

    // Function for viewing create-user page
    public function create_user_view()
    {
        // checking through seesion if user is login
        if(session()->has('login')){

        // Redirecting to create-user page
        return view('create-user');

        }else{

            // if user is not login then send to login page
            return redirect('login')->with('error','You need to login first');
        }
    }

    // Function to logout user
    public function logout()
    {
        // Checking if session login is set
        if(session()->has('login')){

            // Destroying session login
            session()->pull('login',null);
        }

        // Redirecting to login page
        return redirect('login');
    }

    // Function for deleting user
    public function delete_user($id)
    {
        // Finding user by id
        $user=Newuser::find($id);

        // Using delete method to delete recored
        $user->delete();

        // Redirecting to home page with msg
        return redirect('/')->with('msg','Record has been deleted successfully');
    }

    // Function for viewing edit page
  public function edit_view($id)
  {
    
    // checking through seesion if user is login
    if(session()->has('login')){

        // Finding user by id
        $user=Newuser::find($id);

        // viewing edit page with data
        return view('edit',['data'=>$user]);

    }else{

        // if user is not login then send to login page
        return redirect('login')->with('error','You need to login first');
    }
    

  }

    // Function for Updating data from Database  
    public function edit_user(Request $req)
    {
        
        // checking through seesion if user is login
        if(session()->has('login')){

        // Finding user with id
        $user=Newuser::find($req->id);

        // Assigning new value
        $user->name=$req->name;

        // Assigning new value
        $user->email=$req->email;

        // Assigning new value
        $user->address=$req->address;

        // Saving the updated values
        $user->save();


        // Redirecting to home page with msg
        return redirect('/')->with('msg','Updated Successfully');


        }else{

            // if user is not login then send to login page
            return redirect('login')->with('error','You need to login first');
        }
        

    }
}
