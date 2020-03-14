<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Action;
use App\Customer;
use App\DateTime;
use App\ActionType;

class ActionController extends Controller
{
    
    public function show($id)
    {
        $model = Action::find($id);
        return view('actions.show', compact('model')); 
    }
    
    public function create()
    {
        $model = Customer::all();
        return view('actions.create', compact('model')); 
    }

    public function store(Request $request)
    {
        $actNew = new Action();
        $actNew->state = $request->state;
        $actNew->type = $request->type;
        $actNew->id_client = $request->id_client;

        $actNew->save();

        
		$actionsEnds = $this->actionsEnds();
		$actionsMay = $this->actionsMay();


        return view('actions.index', compact('actionsEnds','actionsMay')); 
    }

	public function index( Request $request){


		$actionsEnds = $this->actionsEnds();
		$actionsMay = $this->actionsMay();


		return view('actions.index', compact('actionsEnds','actionsMay'));
	}

    public function actionsEnds(){
        return Action::where('state', 'like', '%finalizad%')->get();;
    }

    public function actionsMay(){
        return Action::where('state', 'like', '%pendiente%')->get();
    }

    public function destroy($id)
    {
        $model = Action::find($id);
        if ($model->delete()) {
            return back(); 
        }
    }
}
