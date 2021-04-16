<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $dataEtudiants = Etudiant::all();
        $dataFilles = Etudiant::where('genre', 'Femme')->get();
        $dataGarcons = Etudiant::where('genre', 'Homme')->get();
        return view('home', compact('dataEtudiants','dataFilles','dataGarcons'));
    }
}
