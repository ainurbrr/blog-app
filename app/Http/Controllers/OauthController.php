<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Str;
use App\Models\User;


class OauthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function setPassword()
    {
        return view(
            'register.setpassword',
            [
                'title' => 'Register',
                'active' => 'register'
            ]
        );
    }

    public function storePassword(Request $request)
    {

        $validatedData = $request->validate([
            'password' => 'required|min:5|max:255',
            'confirm_password' => 'required|same:password',
        ]);
        unset($validatedData['confirm_password']);

        $user = Auth::user();
        $user->password = $validatedData['password'];
        $user->save();
        // $request->session()->flash('success', 'Registration was successfull! please login');
        return redirect('/')->with('success', 'Success Set password');
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();

            // First, check if a user with this email already exists
            $existingUserByEmail = User::where('email', $user->email)->first();

            if ($existingUserByEmail) {
                // If the user exists with the same email, log them in
                Auth::login($existingUserByEmail);

                return redirect('/dashboard');
            }

            // Check if the user has registered before using Google Auth
            $finduser = User::where('gauth_id', $user->id)->first();

            if ($finduser) {
                // If the user is found by gauth_id, log them in
                Auth::login($finduser);

                return redirect('/dashboard');
            } else {
                // Create a new user only if no existing user with the same email or gauth_id exists
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'username' => Str::slug($user->name),
                    'gauth_id' => $user->id,
                    'gauth_type' => 'google',
                    'password' => bcrypt('password') // Encrypt the password securely
                ]);

                // Log in the new user
                Auth::login($newUser);

                return redirect('/set-password');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
