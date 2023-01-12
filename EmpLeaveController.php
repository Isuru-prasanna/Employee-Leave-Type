<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpLeaveController extends Controller
{
    
  public function EmpleaveView(){

   $leaveTypes = DB::table('leave_types')->get();

    return view('pages\leave\leaveTypeView')->with('leaveTypes',$leaveTypes);
}

    public function EmpleaveSave(Request $request){

        DB::table('leave_types')->insert([
            'leavetypes' => $request->leatype
        ]);
        return redirect()->back();
    }

    public function delete_leave($id){
        DB::delete('delete from leave_types where id = ?', [$id]);
        return redirect()->back();
    }

    public function updateempleaveview($id){

        $leaveTypesup = DB::table('leave_types')->where('id','=',$id)->get()->first();
        return view('pages\leave\leaveTypeUpdate')->with('leaveTypesup',$leaveTypesup);

    }

    public function updateempleave(Request $request){
        DB::update('update leave_types set leavetypes = ?  where id = ?', 
        [$request->leatype,$request->id]);
        return redirect('/Emplevtype');
    }

}

