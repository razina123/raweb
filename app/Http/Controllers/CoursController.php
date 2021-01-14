<?php

namespace App\Http\Controllers;

use App\Models\cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function index()
    {
        return response()->json(cours::all());
    }

    public function create(Request $request)
    {
        $cours = new cours();
        $cours->titre = $request->titre;
        $cours->description = $request->description;
       // $cours->categorie = $request->categorie;
        //$cours->difficulte = $request->difficulte;
       // $cours->objectif = $request->objectif;
        //$cours->prerequis = $request->prerequis;
        $cours->image_cours = $request->image_cours;
        $cours->professeur_id = $request->professeur_id;
        $cours->save();

        return response()->json(['message' => 'cours created'], 201);
    }
    public function getCours(Request $request)
    {
        $cours = cours::find($request->id);
        if ($cours) return response()->json($cours, 200);
        return response()->json(['message' => 'cours not found'], 404);
    }
    public function delCours(Request $request)
    {
        $cours = cours::find($request->id);
        if ($cours) {
            cours::destroy($request->id);
            return response()->json(['message' => 'cours deleted'], 200);
        } else return response()->json(['message' => 'cours to delete not found'], 400);
    }
    public function sakeCours(Request $request)
    {
        $cours = cours::find($request->id);
        if ($cours) {
            $cours->titre = $request->titre;
            //$cours->description = $request->description;
            $cours->niveau = $request->niveau;
            $cours->duree = $request->duree;
            $cours->document = $request->document;
            $cours->image_cours = $request->image_cours;
            $cours->professeur_id = $request->professeur_id;
            $cours->save();
            return response()->json(['message' => 'na sake cours'], 200);
        } else return response()->json(['message' => 'bansake cours ba'], 400);
    }
}
