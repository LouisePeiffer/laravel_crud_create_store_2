<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index() {
        //
    }
    public function create() {
        return view('partials.form');
    }
    public function store(Request $request) {
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->genre = $request->genre;
        $etudiant->age = $request->age;
        $etudiant->save();
        return redirect()->route('home');
    }
}
