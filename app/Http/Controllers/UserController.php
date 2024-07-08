<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::with('level')->orderBy('id', 'desc')->get();
        
        return view('user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Level::all();
        return view('user.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // User::create($request->all());

        User::create([
            'name' => $request->name,
            'id_level' => $request->id_level,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);

        return redirect()->to('user');
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
        $edit = User::find($id);
        $data = Level::all();
        return view('user.edit', compact('edit', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //data yang tidak ingin diedit boleh dibiarkan
        $data = [];
        if ($request->filled('password')) {
            $data['password'] = $request->password;
        }
        if ($request->filled('id_level')) {
            $data['id_level'] = $request->id_level;
        }

        User::where('id', $id)->update($data);

        return redirect()->to('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();

        return redirect()->to('user');
    }
}
