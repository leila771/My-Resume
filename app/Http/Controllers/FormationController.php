<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\User;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function getAllByUserId(int $id)
    {
        // Récupérer l'utilisateur à partir de l'id
        $user = User::find($id);

        return view('dashboard.formations.index', compact('user'));
    }

    public function create(int $id)
    {
        return view('dashboard.formations.create', compact('id'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'degree' => 'required|min:3',
            'establishment' => 'required|min:3',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|min:3',
        ]);

        Formation::create([
            'degree' => $request->degree,
            'establishment' => $request->establishment,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            'user_id' => $id
        ]);

        return back()->with('success', 'Formation créer!');
    }

    public function edit(int $id)
    {
        $formation = Formation::find($id);

        return view('dashboard.formations.edit', compact('formation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'degree' => 'required|min:3',
            'establishment' => 'required|min:3',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|min:3',
        ]);

        // Récupérer la formation à partir de son id'
        $formation = Formation::find($id);

        $formation->update([
            'degree' => $request->degree,
            'establishment' => $request->establishment,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description
        ]);

        return back()->with('success', 'Formation modifiée!');
    }

    public function destroy(int $id)
    {
        $formation = Formation::find($id);

        try {
            $formation->delete();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

        return back()->with('success', 'Formation supprimée!');
    }
}
