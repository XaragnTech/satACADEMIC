<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClasseRequest;
use App\Models\Classe;
use App\Models\Niveau;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //create form

    public function createForm(Request $request){
        $levels = Niveau::all();
        return view('classe.createForm',['levels' => $levels]);
    }

    /**
     * list des class
     */


     public function show(Request $request){
         $classes = Classe::with('levels')->get();
         //return $classes;
         return view('classe.show',['classes' =>$classes]);

     }

     public function create(Request $request){

        $classe = Classe::create([
            Classe::CLASSNAME => $request->input('className'),
            Classe::LEVEL     => $request->input('level')
        ]);
        return redirect(route('classe.show'));
    }

    public function updateForm(Request $request,Classe $classe){
        $classe = Classe::with('levels')
                         ->where(Classe::ID,$classe->id)
                         ->firstOrFail();
        $levels = Niveau::all();
        return view('classe.updateForm',[
            'classe' => $classe,
            'levels' => $levels
          ]);
    }

    // updating form

    public function update(Request $request,Classe $classe){
        $classe->classname = $request->input('className');
        $classe->level     = $request->input('level');
        $classe->save();
        return redirect(route('classe.show'));
    }

    //delete the classe

public function delete(Request $request,Classe $classe)
    {
        $classe->delete();
        return redirect()->back();
    }
}
