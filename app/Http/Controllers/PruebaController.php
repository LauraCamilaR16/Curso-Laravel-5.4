<?php namespace Cinema\Http\Controllers;

class PruebaController extends Controller {

    /**
    *Show the aplication welcome screen to the unregister_tick_function
    *
    *@return Response
    */
    public function index()
    {
      return "Hola desde Controller";
    }
    public function nombre($nombre)
    {
      return "Hola mi nombre es: ".$nombre;
    }
}
