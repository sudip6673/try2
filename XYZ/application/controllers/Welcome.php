<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
 function __construct()
	{ 
		parent::__construct();
		//echo("i am here");
		//die();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model("ragistram");
		$this->load->database();
		//$this->load->library('upload');
		$this->load->helper(array('array','string','url','form'));
		
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()

	{
		$this->load->view('menu');
	}
	public function regis()
	{
		$User=$this->input->post('User');
		$password=$this->input->post('Password');
		$this->ragistram->adm($User,$password);
		if($User == "admin" && $password == "admin123")
		{
			$result['all_user']=$this->ragistram->ragistrm();
		    if($result==true)
		    {
			echo("Inserted Successfully");
			$result=$this->ragistram->dashm();
		/*print_r($result);
		die();*/
		    $this->load->view('dashboard',$result);
		    }
		    else
		    {
			echo("Try again");
			die();
		    }
		}
		else{
			echo("Try again");
			$result['all_user']=$this->ragistram->ragistrm();
			$this->load->view('registration');
		}
		
		/*echo("I am here");
		die();*/
		/*if($User == "admin" && $password == "admin")
		{
			echo("I am here");
		}*/
	}
	public function insert()
	{
		$this->load->view('registration');
	}
	public function view()
	{
		/*echo("I am here");
		die();*/
		$result['all_user']=$this->ragistram->model();
		/*print_r($result);
		die();*/
		$this->load->view('view',$result);
	}
	public function ba()
	{
		$this->load->view('registration');
	}
	public function delete()
	{
		/*echo("I am here");
		die();*/
		//$this->ragistram->deletem();
		$id=$this->input->get('id');
		$r=$this->ragistram->deletem($id);
		if($r==1)
		{
			echo("Successfully Deleted");
		    //die();
		    $result['all_user']=$this->ragistram->model();
		$this->load->view('view',$result);
		    //$this->load->view('view');
		}
		/*echo($id);
		die();*/
		else{
			echo("Try again");
			//die();
			$result['all_user']=$this->ragistram->model();
		
		$this->load->view('view',$result);
		}
	}
	public function edit()
	{
		/*echo("I am here");
		die();*/
		$id=$this->input->get('id');
		/*echo($id);
		die();*/
		$r['all_user']=$this->ragistram->editm($id);
        $this->load->view('edit',$r);
       // print_r($r);
	}
	public function update()
	{
		//$id=$this->input->get('id');
		$r=$this->ragistram->updatem();
		if($r==true)
		{
			echo("Update Successfully");
            $result['all_user']=$this->ragistram->model();
			$this->load->view('view',$result);
		}
		else
		{
			echo("Try again");
            $result['all_user']=$this->ragistram->model();
			$this->load->view('view',$result);
		}
	}
	public function dash()
	{
		/*echo("I am here");
		die();*/
		//$s=$this->input->get('status');
		$result=$this->ragistram->dashm();
		/*print_r($result);
		die();*/
		$this->load->view('dashboard',$result);
	}
	public function activ()
	{
		/*echo("I am here");
		die();*/
		$result['all_user']=$this->ragistram->activm();
		$this->load->view('totalproduct',$result);
	}
	public function delc()
	{
		/*echo("I am here");
		die();*/
		$id=$this->input->get('ID');
		$result=$this->ragistram->delm($id);
		if($result==1)
		{
			echo("Delete Successfully");
			$result['all_user']=$this->ragistram->dashm();
			$this->load->view('dashboard',$result);
		}
		else
		{
			echo("Try again");
			$result['all_user']=$this->ragistram->dashm();
			$this->load->view('dashboard',$result);
		}
	}
	public function actc()
	{
		echo("I am here");
		die();
		/*$active['all_user']=$this->ragistram->actm();
		$this->load->view('')*/
	}
	public function edc()
	{
		$id=$this->input->get('ID');
		$result['all_user']=$this->ragistram->edm($id);
		$this->load->view('update',$result);
	}
	public function cust()
	{
		$result['all_user']=$this->ragistram->custm();
		$this->load->view('totalcustomer',$result);
	}
	public function acproduct()
	{
		/*echo("I am here");
		die();*/
		$result['all_user']=$this->ragistram->acproductm();
		$this->load->view('activep',$result);
	}
	public function inproduct()
	{
		$result['all_user']=$this->ragistram->inproductm();
		$this->load->view('inactivep',$result);
	}
	public function acustomer()
	{
		$result['all_user']=$this->ragistram->acustomerm();
		$this->load->view('activec',$result);
	}
	public function incustomer()
	{
		$result['all_user']=$this->ragistram->incustomerm();
		$this->load->view('inactivec',$result);
	}
}
