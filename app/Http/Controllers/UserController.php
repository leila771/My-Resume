<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfil($id) {
        // Récupérer l'utilisateur à partir de son id
        $user = User::find($id);

        return view('dashboard.user.profil', compact('user'));
    }

    public function updateProfil(Request $request, $id) {
        $request->validate([
            'name' => 'required|min:3',
            'contact' => 'min:9',
            'address' => 'min:3',
        ]);

        // Récupérer l'utilisateur à partir de son id
        $user = User::find($id);

        $user->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'address' => $request->address,
        ]);

        return view('dashboard.user.profil', compact('user'));
    }
}
