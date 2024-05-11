<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\attrUser; 

class AttrUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required|numeric',
            'nickname' => 'required',
        ]);

        $newUser = User::create($data);
        return redirect(route('user.index'));
    }

    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required|numeric',
            'nickname' => 'required',
        ]);

        $user->update($data);

        return redirect(route('user.index'))->with('success', 'User Updated Successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'))->with('success', 'User deleted successfully');
    }
}
