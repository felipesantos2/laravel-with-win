<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public readonly User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->all();

        return view(
            'users',
            ['users' => $users]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->input('name');
        $request->input('email');
        $request->input('password');


        print_r($method = $request->method());

        if( !empty($request->method() == 'POST') ) {
            return redirect()->back()->with('success', 'Cadastrado com sucesso!');
        }

        return redirect()->back()->with('error', 'Error. Adicione suas informações, por favor!');
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
    public function edit(User $user)
    {
        // echo "<pre>";
        // var_dump($user);
        return view('user_edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->user->where('id', $id)
                        ->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('success', 'Sucesso!');
        }

        return redirect()->back()->with('error', 'Sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
