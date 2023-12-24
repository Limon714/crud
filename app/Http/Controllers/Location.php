<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location as UserLocation;
class Location extends Controller
{
    public function index(){
        $data = UserLocation::get();
        return view ('welcome',[
         'data'=>$data
        ]);
      }


  public function create(Request $request){

    $lc = new UserLocation;
    $lc->location = $request->location;
    $lc->save();

    return redirect(route('home'))->with('status','Sucessfully Added');
  
  }
 

  public function edit($id){
    $info = UserLocation::find($id);
    return view ('editfile',[
        'info'=>$info
       ]);
  }

  public function update(Request $request, $id){
    $lc = UserLocation::find($id);
    $lc->location = $request->location;
    $lc->save();

    return redirect(route('home'))->with('status','Update Sucessfully');
  }

  public function delete($id){
   UserLocation::destroy($id);
   return redirect(route('home'));
    
  }

}
