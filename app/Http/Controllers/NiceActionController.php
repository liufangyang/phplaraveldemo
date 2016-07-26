<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceActionController extends Controller{
    
    public function getNiceAction($action , $name = null){
        
        return view('actions.'.$action, ['name' => $name]);
    }
    
    public function postNiceAction(Request $request){
        return  view('actions.nice',['action' => $request['action'],'name' => $request['name']]);
    }
}
