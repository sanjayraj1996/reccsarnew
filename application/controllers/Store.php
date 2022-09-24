<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Store extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Insert_model');
		$this->load->database();
    }
	public function form_contact()
	{
		$dt = [
			'status' => 'ok',
			'message' => 'Hi '.$this->input->post('name').', Thanks for your enquiry. We will connect you shortly'
		];
		echo json_encode($dt);
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'r_name'  => $this->input->post('name'),
				'r_phone'  => $this->input->post('phone'),
				'r_email'  => $this->input->post('email'),
				'r_message' => $this->input->post('description'),
				'r_created_date' => date('Y-m-d')
			);
			$this->Insert_model->form_enquiry_contact($data);
		} else { echo "failed"; }
	}
	public function university_enquiry()
	{
		$dt = [
			'status' => 'ok',
			'message' => 'Hi '.$this->input->post('name').', Thanks for your enquiry. We will connect you shortly'
		];
		echo json_encode($dt);
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'r_university'  => $this->input->post('idval'),
				'r_name'  => $this->input->post('name'),
				'r_phone'  => $this->input->post('phone'),
				'r_email'  => $this->input->post('email'),
				'r_message'  => $this->input->post('description'),
				'r_created_date' => date('Y-m-d')
			);
			$this->Insert_model->form_enquiry_university($data);
		} else { echo "failed"; }
	}
	public function training_enquiry()
	{
		$dt = [
			'status' => 'ok',
			'message' => 'Hi '.$this->input->post('name').', Thanks for your enquiry. We will connect you shortly'
		];
		echo json_encode($dt);
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'r_training'  => $this->input->post('idval'),
				'r_name'  => $this->input->post('name'),
				'r_phone'  => $this->input->post('phone'),
				'r_email'  => $this->input->post('email'),
				'r_message'  => $this->input->post('description'),
				'r_created_date' => date('Y-m-d')
			);
			$this->Insert_model->form_enquiry_training($data);
		} else { echo "failed"; }
	}
	public function vendor_enquiry()
	{
		$dt = [
			'status' => 'ok',
			'message' => 'Hi '.$this->input->post('firm').', Thanks for your vendor enquiry. We will connect you shortly'
		];
		echo json_encode($dt);
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'r_firm'  => $this->input->post('firm'),
				'r_director'  => $this->input->post('director'),
				'r_address'  => $this->input->post('address'),
				'r_city'  => $this->input->post('city'),
				'r_pincode'  => $this->input->post('pincode'),
				'r_state'  => $this->input->post('state'),
				'r_phone'  => $this->input->post('phone'),
				'r_secphone'  => $this->input->post('secphone'),
				'r_email'  => $this->input->post('email'),
				'r_year'  => $this->input->post('year'),
				'r_message'  => $this->input->post('message'),
				'r_created_date' => date('Y-m-d')
			);
			$this->Insert_model->form_enquiry_vendor($data);
		} else { echo "failed"; }
	}
	public function event_enquiry()
	{
		$dt = [
			'status' => 'ok',
			'message' => 'Hi '.$this->input->post('name').', Thanks for register your Events.'
		];
		echo json_encode($dt);
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'r_event'  => $this->input->post('idval'),
				'r_name'  => $this->input->post('name'),
				'r_phone'  => $this->input->post('phone'),
				'r_email'  => $this->input->post('email'),
				'r_message'  => $this->input->post('message'),
				'r_created_date' => date('Y-m-d')
			);
			$this->Insert_model->form_enquiry_events($data);
		} else { echo "failed"; }
	}
}
