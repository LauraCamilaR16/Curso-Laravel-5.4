<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller{
    /**
    *Display
    *
    *@return Response
    */
    public function index()
    {
      return "Estoy en el index";
    }
    /**
    *
    *
    *@return Response
    */
    public function create()
    {
      return "Esto seria el formulario";
    }
    /**
    *Store a newly created in Store
    *
    *@return Response
    */
    public function Store()
    {
      //
    }
}
