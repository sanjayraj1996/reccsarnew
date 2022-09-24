<?php
class Insert_model extends CI_Model{
	public function form_enquiry_contact($data)
	{
		$this->db->insert('enquiry_contact', $data);
	}
	public function form_enquiry_university($data)
	{
		$this->db->insert('enquiry_university', $data);
	}
	public function form_enquiry_training($data)
	{
		$this->db->insert('enquiry_training', $data);
	}
	public function form_enquiry_vendor($data)
	{
		$this->db->insert('enquiry_vendor', $data);
	}
	public function form_enquiry_events($data)
	{
		$this->db->insert('enquiry_event', $data);
	}
}
?>