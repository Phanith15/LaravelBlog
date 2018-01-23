<?php
  namespace App\Http\Controllers;
  class PagesController extends Controller{
    public function getIndex(){
      /*
          - process variable data or params
          - talk to the model
          - receive from the model (database)
          - process data from the model
          - pass data to the correct view
      */
      return view('pages/welcome');
    }
    public function getAbout(){
      $first = "Pete";
      $last = "Brown";
      $full = $first . " " . $last;
      $myemail = "peteb@gmail.com";
      return view('pages/about')->withFullname($full)->withEmail($myemail); // or ->withFullname($full);
    }
    public function getContact(){
      return view('pages/contact');
    }
  }
 ?>
