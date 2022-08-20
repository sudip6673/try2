<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ragistram extends CI_model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
		$this->load->library('upload');
		$this->load->helper(array('array','string','url','form'));
	}

	public function ragistrm()
	{
		/*echo("I am here");
		die();*/
		//$name=$this->input->post("Name");
		
		//$Phone=$this->input->post("Phone");
		
		$User=$this->input->post('User');
		
		$Password=$this->input->post('Password');
		/*echo($name);
		echo($Phone);
		echo($User);
		echo($Password);
		die();*/
		$array=array(
			'Userid'=>$User,
			'Password'=>$Password);
		$this->db->insert("log",$array);
		return true;
		//print_r($array);
		//die();
		
	}
	public function model()
	{
		/*echo("I am here model");
		die();*/
		$result=$this->db->get("log")->result_array();
		/*print_r($result);
		die();*/
		return $result;
	}
	public function deletem($id)
	{
       /*echo($id);
		die();*/
		$this->db->where('ID',$id)->delete("log");
		/*echo("Successfully Deleted");
		die();*/
		return 1;
	}
	public function editm($id)
	{
		/*echo("I am model");
		die();*/
		/*echo($id);
		die();*/
		$r=$this->db->where('ID',$id)->get("log")->result_array();
		return $r;
		//print_r($r);
	}
	public function updatem()
	{
		$id=$this->input->post('id');
		/*echo($id);
		die();*/
		//$id=$this->input->post('id');
		$user=$this->input->post('User');
		$password=$this->input->post('Password');
		$array=array('Userid'=>$user,
			'Password'=>$password);
		//print_r($array);
		//die();
		$this->db->where('ID',$id)->update("log",$array);
		return true;

	}
	public function dashm()
	{
		/*echo("I am model");
		die();*/
		
		/*$result=$this->db->where('status',1)->get("product")->result_array();
		return $result;*/
		$this->db->select('count(product.ID) as active');
		$this->db->where('product.status=1' );
		$this->db->limit(1);
		$actid=$this->db->get('product');
		$acti=$actid->row()->active;
		//$actid=$this->db->get()->result_array();
        //return $actid;
		$this->db->select('count(product.ID) as Inactive');
		$this->db->where('product.status=0' );
		$this->db->limit(1);
        $inid=$this->db->get('product');
        $inact=$inid->row()->Inactive;
        //echo($acti);
		//echo($inact);
		//die();
		/*echo("I am here");
		die();*/
		$this->db->select('count(customer.ID) as ac');
		$this->db->where('customer.status=1' );
		$this->db->limit(1);
		$acid=$this->db->get('customer');
		$actidd=$acid->row()->ac;
		/*echo($actidd);
		die();*/
		//$actid=$this->db->get()->result_array();
        //return $actid;
		$this->db->select('count(customer.ID) as inn');
		$this->db->where('customer.status=0' );
		$this->db->limit(1);
        $ini=$this->db->get('customer');
        $inidd=$ini->row()->inn;
        
		/*echo($inidd);
        die();*/

		$result=array('active'=>$acti,
			'Inactive'=>$inact,
			'ac'=>$actidd,
			'inn'=>$inidd);
		/*print_r($result);
		die();*/

		return $result;
	}
	public function activm()
	{
		/*echo("I am model");
		die();*/
        $result=$this->db->get("product")->result_array();
        return $result;
	}
	public function delm($id)
	{
		$this->db->where('ID',$id)->delete("project");
		return 1;
	}
	public function edm($id)
	{
		$result=$this->db->where('ID',$id)->get("product")->result_array();
		return $result;

	}
	public function custm()
	{
		$result=$this->db->get("customer")->result_array();
		return $result;
	}
	public function acproductm()
	{
		$result=$this->db->where('status',1)->get("product")->result_array();
		return $result;
	}
	public function inproductm()
	{
		$result=$this->db->where('status',0)->get("product")->result_array();
		return $result;

	}
	public function acustomerm()
	{
		$result=$this->db->where('status',1)->get("customer")->result_array();
		return $result;
	}
	public function incustomerm()
	{
        $result=$this->db->where('status',0)->get("customer")->result_array();
        return $result;
	}
	public function adm($User,$password)
	{
		/*echo("I am here");
		die();*/
		/*echo($User);
		echo($password);
		die();*/
		$r=$this->db->where('Userid',$User)->where('Password',$password)->get('admin');
		//print_r($r);
		//die();
		if($r->num_rows()==1)
		{
			echo("Successfully");
		}
		else{
			echo("Not Successfully");
		}
	}

}