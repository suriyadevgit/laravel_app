<?php
namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
//use App\Http\Controllers\MailerController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //testing mail servide
       $this->sendemail();

       return view('home');
   }


   /**
     * Update posisi menu
     *
     * @param  int  $id
     * @return Response
     */
   public function sendemail()
   {

       
  }

}
