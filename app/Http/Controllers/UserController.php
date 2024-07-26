<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $profile)
    {
        return view('profile.edit', [
            'title' => 'Edit Profile',
            'active' => 'auth',
            'user' => $profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $profile)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'image|file|max:2048',
        ];

        if ($request->username != $profile->username) {
            $rules['username'] = 'required|unique:users,username';
        }

        if ($request->email != $profile->email) {
            $rules['email'] = 'required|unique:users,email';
        }

        if ($request->filled('old_password') || $request->filled('new_password') || $request->filled('new_password_confirmation')) {
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|min:5|max:255|confirmed',
            ]);

            // Verifikasi kata sandi lama
            if (!Hash::check($request->old_password, $profile->password)) {
                return back()->withErrors(['old_password' => 'The old password is incorrect.']);
            }

            // Update kata sandi
            $rules['password'] = 'required';
            $request->merge(['password' => Hash::make($request->new_password)]);
        }


        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('profile-images');
        }

        User::where('id', $profile->id)
            ->update($validatedData);
        return redirect('/')->with('success', 'Succesfully update profile!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
