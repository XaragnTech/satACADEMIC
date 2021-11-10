<?php

namespace App\Http\Controllers;

use App\Http\Requests\MatiereRequest;
use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * create niveau
     */

    public function createForm(Request $request){

        return view('matiere.createForm');
       }

       /**
        * liste of the nivel into the class
        */
    public function show(Request $request){
          $matieres = Matiere::all();
         return view('matiere.show', ['matieres' =>$matieres]);
        }

    public function create(MatiereRequest $request){
        $matiere = Matiere::create([
            Matiere::LIBELE =>$request->input('libele'),
            Matiere::SEMESTRE =>$request->input('semestre'),
          ]);
          return redirect(route('matiere.show'));
         }
    // open update form
    public function updateForm(Request $request, Matiere $matiere){
        return view ('matiere.updateForm',['matiere' => $matiere]);
        }

    // update matiere function
    public function update(Request $request, Matiere $matiere){
        $matiere->libele = $request->input('libele');
        $matiere->semestre     = $request->input('semestre');
        $matiere->save();
        return redirect(route('matiere.show'));
    }

    // delete matiere function
    public function delete(Request $request,Matiere $matiere)
    {
        $matiere->delete();
        return redirect()->back();
    }

    }


