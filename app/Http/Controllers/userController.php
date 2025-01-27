<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;  // Make sure this import is present
use Illuminate\Support\Facades\Auth;  // <-- Import the Auth facade
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\User;

class userController extends Controller
{
    public function login_view(){
        return view('login');
    }

    public function Signup_view(){
        return view('signup');
    }
    public function signup(Request $request)
    {

         $user = new User();
         $user->username = $request->input('username');
         $user->email = $request->input('email');
         $user->password = Hash::make($request->input('password'));  // Hash the password before saving
         $user->role = $request->input('role', 'admin');  // Default to 'admin' if no role is specified
 
         // Save the user
         $user->save();

        // Return a response
        return redirect()->route('/login')->with('message', 'User registered successfully! Please login.');
    }
    public function login(Request $request)
    {
        // Validate the email and password (you can remove this if you prefer no validation)
        $email = $request->input('email');
        $password = $request->input('password');
    
        // Find the user by email
        $user = User::where('email', $email)->first();
    
        // Check if the user exists and the hashed password matches
        if ($user && Hash::check($password, $user->password)) {
            session(['username' => $user->name]);  // Store the username (or any other data)

            // Optionally store more user info in session
             session(['user_id' => $user->id]);

            // Redirect to the dashboard or another page after successful login
            return redirect()->route('dashboard')->with('message', 'Login successful!');
        }
    
        // If login fails, return with an error message
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
    public function logout()
    {
        // Remove specific session data
        session()->forget('username');
        session()->forget('user_id');

        // Optionally, clear all session data
        // session()->flush();

        // Redirect to login or home
        return redirect()->route('login')->with('message', 'You have logged out successfully.');
    }
}
