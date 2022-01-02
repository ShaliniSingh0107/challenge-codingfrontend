<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	
	// public function work()
	// {
	// 	$this->load->view('test');
	// }

	public function index()
	{
		$this->load->library('curl');
        $result = $this->curl->simple_get('https://jsonplaceholder.typicode.com/users');
        $key = array();
        // echo $result;
        // var_dump($result);
		// $name = "nitish";
		$key['data']= json_decode($result);
		$this->load->view('test1',$key);
	}

	public function submitForm()
    {
        /* API URL */
        $url = 'https://jsonplaceholder.typicode.com/posts';
             
        /* Init cURL resource */
        $ch = curl_init($url);
            
        /* Array Parameter Data */
		$data = array();
		$usedata['title']= html_escape($this->input->post('title'));
		$usedata['body']= html_escape($this->input->post('body'));
		$usedata['userId']= html_escape($this->input->post('users'));
        // $data = ['title'=>$this->$this->input->post('title'),'body'=>$this->$this->input->post('body'),'userId'=>$this->$this->input->post('user')];
		$data = json_encode($usedata);   
        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
           
        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type:application/json'
                ));
            
        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
        /* execute request */
        $result = curl_exec($ch);
           
        /* close cURL resource */
        curl_close($ch);
		print_r($result);
    }
}