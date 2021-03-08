<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grille;
use App\Models\Chapitre;
use App\Models\User;
class ChapitreController extends Controller
{
  
    public function index()
    {

        $chapitre = Chapitre::orderBy('created_at','desc')->paginate(5);
        return view('chapitre.index')->with('chapitre', $chapitre);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chapitre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

        'chapitre' => 'required',

    ]);


    // Create feedback
    $grille = Grille::find($id);
        $chapitre = new Chapitre();
        $chapitre->chapitre = $request-input('chapitre');
        $grille->chapitres()->save($chapitre);
        return back()->with('success','Abonnement a été ajouté');
    }
    

    
}
