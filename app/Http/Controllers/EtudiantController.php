<?php

namespace App\Http\Controllers;

use App\Models\cours;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        return response()->json(Etudiant::all());
    }

    public function create(Request $request)
    {
        $Etudiant =new Etudiant();
        $Etudiant->name = $request->name;
        $Etudiant->login = $request->login;
        $Etudiant->email = $request->email;
        $Etudiant ->password = $request->password;

        $Etudiant ->prename = $request->prename;
        $Etudiant ->save();

        return response()->json(['message' => 'Etudiant created'], 201);
    }
    public function getEtudiant(Request $request)
    {
        $cours = Etudiant::find($request->id);
        if ($cours) return response()->json($cours, 200);
        return response()->json(['message' => 'etudiant not found'], 404);
    }
    
}
