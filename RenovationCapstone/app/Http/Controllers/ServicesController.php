<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\estimates;

use App\Models\services;


class ServicesController extends Controller
{
    /**
     * Add service form
     */

     public function serviceForm(){
        if(session('LoggedAdmin')){
            return view('Services.add-service');
        }
     }


     /**
      * Add service
      */

    public function addService(Request $request){
        if(session('LoggedAdmin')){
            $new = services::create($request->all());
            return redirect()->route('dashboard')->with("Success","Service Has Been Added!");
        }
    }

    /**
     * Update Form
     */
    public function updateForm($id){
        $data = services::find($id);
        return view('Services.update-service',["data"=>$data]);
    }


    /**
     * Update Service
     */
    public function update(Request $request, $id){
        if(session("LoggedAdmin")){
            $data=services::find($id);
            $data->name = $request->name;
            $data->cost_sqft = $request->cost_sqft;
            $data->description = $request->description;
            $data->save();
            return view('Admin.dashboard')->with("Success","Service Has Been Updated");
        }
    }


    /**
     * Delete Service
     */
    public function deletePage($id){
        $data = services::find($id);
        return view('Services.delete-service',["data"=>$data]);
    }


    /**
     * Delete
     */
    public function delete($id){
        $data = services::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with("Success","Service Has Been Delete.");
    }



    /**
     * Open Estimator
     */
    public function estimator(){
        if(session("LoggedEmployee")||session("LoggedAdmin")){
            $services = services::all();
            return view("Services.estimator",["services"=>$services]);
        }
    }

    /**
     * Submit Estimotor Data
     */
    public function sendEstimate(Request $request){
        $request->validate([
            'service_id' => 'required',
        ]);

        $new = estimates::create($request->all());
        if($new){
            return redirect()->back()->with('Success','The Estimate has been saved!');
        } else {
            return redirect()->back()->with('Fail','Something went wrong!');
        }

    }

    /**
     * Estimate Status update
     */

    public function statusUpdate(){

    }



    /**
     * Delete Estimate PAge
     */
    public function deleteEstimatePage($id){
        $data = estimates::find($id);
        return view('Services.delete-estimate',["data"=>$data]);
    }

    /**
     * Delete Estimate
     */
    public function deleteEstimate($id){
        $data = estimates::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('Success','The estimate has been deleted');    }
}
