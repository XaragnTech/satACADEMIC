<?php

namespace App\Http\Controllers;

use App\Http\Requests\NiveauRequest;
use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    //
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

     return view('niveau.createForm');
    }

    /**
     * create niveau
     */

     public function create(NiveauRequest $request){
      $niveau = Niveau::create([
        Niveau::LIBELE =>$request->input('libele'),
      ]);
      return redirect(route('niveau.show'));
     }

     /**
      * liste of the nivel into the class
      */
      public function show(Request $request){
        $niveaux  = Niveau::all();
       return view('niveau.show', ['niveaux' =>$niveaux]);
      }

      // open update form
      public function updateForm(Request $request, Niveau $niveau){
        return view('niveau.updateForm',['niveau' => $niveau]);
      }

      // update function

      public function update(NiveauRequest $request , Niveau $niveau){
         $niveau->libele = $request->libele;
         $niveau->save();
         return redirect(route('niveau.show'));
      }

      public function delete(Request $request, Niveau $niveau){
          $niveau->delete();
          return redirect()->back();
      }
}
