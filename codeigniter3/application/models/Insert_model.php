<?php
class Insert_model extends CI_Model
{
	//Insert
	function saverecords($first_name,$last_name,$username,$email,$phone)
	{
		// câu lệnh sql
		$query = " insert into user values('', '$first_name','$last_name','$username','$email','$phone')";
		// thực thi
		$this->db->query($query);
	}
}
