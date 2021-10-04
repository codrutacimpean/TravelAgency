<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVacantaRequest;
use App\Http\Requests\UpdateVacantaRequest;
use App\Models\Vacanta;
use Illuminate\Http\Request;

class Agentie_De_TurismController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    //INDEX FUNCTION
    public function index(Request $request){

        $user = auth()->user();
        if($request->has('search')){
            $search = $request->search;
            $vacante = $user->vacante()->where('Destinatie', 'LIKE', "%{$search}%")->paginate(6);
        }
        else{
        $vacante = $user->vacante()->paginate(6);
        }
        return view('vacante.index', ['vacante'=>$vacante]);
   
    }
    //CREATE FUNCTION
    public function create(){

        return view('vacante.create');
    }
    //STORE FUNCTION
    public function store(CreateVacantaRequest $request)
    {
        $user = auth()->user();
        $nouaVacanta = $user->vacante()->create($request->all());
        $request->session()->flash('success','Vacanta a fost creeata');

        return redirect()->route('vacante.index');
    }

    //SHOW FUNCTION
    public function show($id){

        $vacanta = Vacanta::find($id);

        return view('vacante.show',['vacanta'=>$vacanta]);
    }
    //EDIT FUNCTION
    public function edit($id){

        $vacanta = Vacanta::find($id);

        return view('vacante.edit', ['vacanta' =>$vacanta]);
    }
    //UPDATE FUNCTION
    public function update(UpdateVacantaRequest $request, $id){

        $vacanta = Vacanta::find($id);
        $vacanta->update($request->all());
        $request->session()->flash('success','Vacanta a fost actualizata!');
        return redirect()->route('vacante.show', $id);
    }
    //DELETE FUNCTION
   
    public function destroy(Request $request, $id){

        $vacanta = Vacanta::find($id);
        $vacanta->delete();
        $request->session()->flash('success','Vacanta a fost stearsa');
        return redirect()->route('vacante.index');
    }
}
