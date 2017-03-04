<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Task as Tasks;

class TaskController extends Controller
{

   public function __construct()
   {
    $this->middleware('auth');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


       //$tasks =  Tasks::all();

        //get the mailid form login session 

        $email_id = Auth::user()->email;

        $tasks = DB::table('tasks')->where('email_id', $email_id )->first();

        return view('tasks/index',compact('tasks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($name,$mailId)
    {


      DB::insert('insert into tasks (first_name,email_id) values(?,?)',[$name,$mailId]);


  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {



      $file = $request->file('doc');
      $file2 = $request->file('doc2');

      $destinationPath = 'uploads/stu_'.$request->first_name;


      $var = $file->getClientOriginalName();
      $var = $request->first_name.'_'.$var;

      $var2 = $file2->getClientOriginalName();
      $var2 = $request->first_name.'_'.$var2;

      if($file != null )
          $file->move($destinationPath,$var);

      if($file2 != null)
          $file2->move($destinationPath,$var2);

        //
      DB::table('tasks')
      ->where('id', $id)
      ->update(['first_name'=> $request->first_name]);

      return redirect()->route('appform.index')->with('message','Profile Updated Successfully');

  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
