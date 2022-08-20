<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function getProfil($id)
    {
        // Récupérer l'utilisateur à partir de son id
        $user = User::find($id);

        return view('dashboard.user.profil', compact('user'));
    }

    public function updateProfil(Request $request, $id)
    {
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

        return redirect()->back();
    }

    public function changePassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed'
        ]);

        // Récupérer l'utilisateur à partir de son id
        $user = User::find($id);

        $user->update([
            'password' => password_hash($request->password, PASSWORD_BCRYPT)
        ]);
        return redirect()->back();
    }

    public function changeImage(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time() . '.' . $request->image->extension();

        // Récupérer l'utilisateur à partir de son id
        $user = User::find($id);
        $image = Image::find($user->image->id);

        // Public Folder
        //$request->image->move(public_path('images'), $imageName);

        // Store in Storage Folder
        $request->image->storeAs('images', $imageName);

        //Modifie le chemin de l'image
        $image->update(['url' => Storage::disk("images")->url($imageName)]);


        // // Store in S3
        // $request->image->storeAs('images', $imageName, 's3');

        //Store IMage in DB


        return back()->with('success', 'Image uploaded Successfully!')
            ->with('image', $imageName);
    }
    public function listResume($id)
    {
        // Récupérer l'utilisateur à partir de son id
        $user = User::find($id);
        $template = "resume";

        return view("dashboard.$template", compact('user'));
    }
}
