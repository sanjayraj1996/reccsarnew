<?php
class Viewmodel extends CI_Model{
	public function country() {
		$this->db->select('a.r_univ_name, b.id as idcountry, a.id, b.r_country_name');
		$this->db->from('country b');
		$this->db->join('university a', 'a.r_country_id = b.id', 'left');
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret;
	}
	public function training_menu() {
		$this->db->select('a.r_course_name, b.id as idtraining, a.id, b.r_training_category');
		$this->db->from('training_category b');
		$this->db->join('training a', 'a.r_category_id = b.id', 'left');
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret;
	}
	public function country_title($id) {
		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret[0];
	}
	public function training_title($id) {
		$this->db->select('*');
		$this->db->from('training_category');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret[0];
	}
	public function university($id,$per_page,$page) {
		$this->db->select('university.*, country.r_country_name, country.r_currency_symbol, university_course.r_univ_course_name');
		$this->db->from('university');
		$this->db->where('university.r_country_id', $id);
		$this->db->join('country', 'university.r_country_id = country.id', 'inner');
		$this->db->join('university_course', 'university.r_course_id = university_course.id', 'inner');
		$this->db->limit($per_page,$page);
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret;
	}
	public function university_count_data($id)
	{
		$wh = array();
		$this->db->select('count(university.id) as total_count');
		$this->db->from('university');
		$this->db->where('r_country_id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result[0]->total_count;
	}
	public function university_single($id) {
		$this->db->select('university.*, country.r_country_name, country.r_currency_symbol, university_course.r_univ_course_name');
		$this->db->from('university');
		$this->db->where('university.id', $id);
		$this->db->join('country', 'university.r_country_id = country.id', 'inner');
		$this->db->join('university_course', 'university.r_course_id = university_course.id', 'inner');
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret[0];
	}
	public function university_random($id) {
		$this->db->select('university.*, country.r_country_name, country.r_currency_symbol, university_course.r_univ_course_name');
		$this->db->where('r_country_id', $id);
		$this->db->from('university');
		$this->db->join('country', 'university.r_country_id = country.id', 'inner');
		$this->db->join('university_course', 'university.r_course_id = university_course.id', 'inner');
		$this->db->order_by('university.id','RANDOM');
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret;
	}
	public function training($id,$per_page,$page) {
		$this->db->select('training.*, training_category.r_training_category');
		$this->db->from('training');
		$this->db->where('training.r_category_id', $id);
		$this->db->join('training_category', 'training.r_category_id = training_category.id', 'inner');
		$this->db->limit($per_page,$page);
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret;
	}
	public function training_count_data($id)
	{
		$wh = array();
		$this->db->select('count(training.id) as total_count');
		$this->db->from('training');
		$this->db->where('r_category_id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result[0]->total_count;
	}
	public function training_single($id) {
		$this->db->select('training.*, training_category.id as idtraining, training_category.r_training_category');
		$this->db->from('training');
		$this->db->where('training.id', $id);
		$this->db->join('training_category', 'training_category.id = training.r_category_id', 'inner');
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret[0];
	}
	public function training_random($id) {
		$this->db->select('training.*, training_category.id as idtraining, training_category.r_training_category');
		$this->db->where('training.r_category_id', $id);
		$this->db->from('training');
		$this->db->order_by('training.id','RANDOM');
		$this->db->join('training_category', 'training_category.id = training.r_category_id', 'inner');
		$this->db->limit(4);
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret;
	}
	public function events($per_page,$page) {
		$this->db->select('*');
		$this->db->from('events');
		$this->db->limit($per_page,$page);
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret;
	}
	public function events_single($id) {
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret[0];
	}
	public function events_count_data()
	{
		$wh = array();
		$this->db->select('count(events.id) as total_count');
		$this->db->from('events');
        $query = $this->db->get();
        $result = $query->result();
        return $result[0]->total_count;
	}
	public function faq() {
		$this->db->select('*');
		$this->db->from('faq');
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret;
	}
	public function services_role1() {
		$this->db->select('*');
		$this->db->from('services');
		$this->db->where('role', 1);
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret;
	}
	public function services_role2() {
		$this->db->select('*');
		$this->db->from('services');
		$this->db->where('role', 2);
		$query = $this->db->get();
		$ret = $query->result_array();
        return $ret;
	}
}
?>