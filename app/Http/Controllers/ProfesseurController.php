<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    public function create(Request $request)
    {

        $professeur = new Professeur();
        $professeur->grade = $request->input('grade');
        $professeur->nbr_cours= 0;
        $professeur->name = $request->name;
        $professeur->email = $request->email;
        $professeur->password = $request->password;
        $professeur->created_at = $request->input('created_at');
        $professeur->updated_at = $request->input('updated_at');

        if ($professeur->save()) {
            return response()->json([
                'success' => ' prof enregistré'
            ]);
        } else {
            return response()->json([
                'error' => 'prof pas enregistré'
            ]);
        }
    }
    public function getProfesseur(Request $request)
    {
        $cours = Professeur::find($request->id);
        if ($cours) return response()->json($cours, 200);
        return response()->json(['message' => 'prof not found'], 404);
    }
}
