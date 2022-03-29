<?php
class Home_model extends CI_Model {
	// hiển thị
	function display_records() {
		$query = $this->db->query("select * from member");
		return $query->result();
	}
}
