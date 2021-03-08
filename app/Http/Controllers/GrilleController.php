<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grille;
use App\Models\Chapitre;
use App\Models\User;



class GrilleController extends Controller
{
    public function __construct(Grille $grille)
    {
        $this->grille = $grille;
       // $this->middleware("auth");

    }
    public function index()
    {
        $grille = $this->grille::all();

        return view("grille.index", ['grille' => $grille]);

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("grille.create");
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
            'name' => 'required',
        ]);

        $this->grille->create([
            'name' => $request->name
        ]);

        return redirect()->route('chapitre.index')->with('success', 'Grille Created');
    }

    public function addGrille(){
        
        $grille = new Grille();
        $grille->name = $request->input('name');
        $grille->save();
        return back()->with('success','Abonnement a été ajouté');
    }
    public function addChapitre($id){
        $grille = Grille::find($id);
        $chapitre = new Chapitre();
        $chapitre->chapitre = $request->input('chapitre');;
        $grille->chapitres()->save($chapitre);
        return back()->with('success','Abonnement a été ajouté');
    }
}
