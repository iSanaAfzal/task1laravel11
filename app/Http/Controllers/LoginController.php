<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index(Login $key)
    {
      return ($key);
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
    // Validate the incoming request data
    $validatedData = $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:logins,email', // Ensure email uniqueness
        'password' => 'required|string|min:6',
    ]);
       $newLogin = Login::create($validatedData);
   // Set the success message in the session
    session()->flash('success', 'User created successfully!');

    // Redirect back to the previous page
    return redirect()->back();
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}