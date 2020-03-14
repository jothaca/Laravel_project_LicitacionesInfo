<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\User;
use App\Action;
use Auth;
use Carbon;


class CustomerController extends Controller
{
    public function show($id)
    {
        $model = Action::find($id);
        return view('actions.show', compact('model')); 
    }
	
	public function index( Request $request){

		$model = Customer::all();


		return view('customers.index', compact('model'));
    }
    
    public function create()
    {
		return view('customers.create');
    }
    
    public function store(Request $request)
    {
        $model = new Customer();
        $model->name = $request->name;
        $model->id_action = $request->id_action;
        $model->state = $request->state;
        $model->description = $request->description;

        $model->save();

		return back();
    }



    public function edit($id)
    {
        $model = Customer::find($id);
        return view('customers.edit', compact('model')); 
    }

    public function update(Request $request){      
        $model = Customer::find($request->id);
        $model->name = $request->name;
        $model->id_action = $request->id_action;
        $model->state = $request->state;
        $model->description = $request->description;

        $model->save();

        return back();
    } 

    public function destroy($id)
    {
        $model = Customer::find($id);
        if ($model->delete()) {
            return back()->with('statustwo', 'La acción <strong>'.$model->name.'</strong> fué eliminado con éxito!'); 
        }
    }
        
}
