<?php namespace App\Controllers;

class contactoController extends BaseController
{
	public function index()
	{
		return view('contacto/inicio');
	}

	public function menu()
	{
		return view('contacto/menu');
	}
	
	public function muneco()
	{
		return view('contacto/muñecos');
	}

}
