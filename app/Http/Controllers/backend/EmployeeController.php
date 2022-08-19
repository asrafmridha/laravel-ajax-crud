<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('addEmployeeView');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $employee= new Employee;

       $employee->fName=$request->fName;
       $employee->lName=$request->lName;
       $employee->address=$request->address;
       $employee->phone=$request->phone;
       $employee->email=$request->email;
       $employee->status=$request->status;
       $employee->save();
       if($employee){
        return response()->json([
           
             "msg"=>"success"
        ]);
       }
       else{
        return response()->json([
           
            "msg"=>"104"
       ]);

       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $alldata=Employee::all();
       
      if($alldata){
        return response()->json([
           "status"=>"success",
            "alldata"=>$alldata
       
        ]);
      }else{
        return response()->json([
            "status"=>"404",
            
        
         ]);

      }
        

       
      

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Employee::find($id);

        return response()->json([

            "data"=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee= Employee::find($id);

       $employee->fName=$request->fName;
       $employee->lName=$request->lName;
       $employee->address=$request->address;
       $employee->phone=$request->phone;
       $employee->email=$request->email;
       $employee->status=$request->status;
       $employee->update();

       return response()->json([

         "status"=>"success"
       ]);

      
     
    }

    function search($search){

      $data= Employee::where("phone",$search)->orwhere("email",$search)->get();
       
      return response()->json([

         "data"=>$data
      ]);



    }
      
        
      
       
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Employee::find($id);

        $data->delete();
        if($data){
            return response()->json([

                "status"=>"success"
            ]);
        }
    }
}
