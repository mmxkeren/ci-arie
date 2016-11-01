<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Profil_model extends CI_Model
	{
		function index()
		{
			echo "string";
		}

		function __construct(argument)
		{
			# code...
		}

		function input()
		{
			$this->load->view('profil_input');
		}
	}

?>