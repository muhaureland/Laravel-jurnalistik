<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function edit(User $user)
    {
        return view('admin.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name'         => 'required|max:15'
        ]);

        User::where('id', $user->id)->update($validatedData);
        return redirect('dashboard/categories')->with('success', 'postingan data berhasil dirubah!');
    }
}
