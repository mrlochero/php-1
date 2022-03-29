<?php
class Shop_model extends CI_Model
{
  function getAmungStats($amung) {
    if(!isset($amung)) return false;
 
    $url = 'http://whos.amung.us/sitecount/' . $amung . '/';
    $result = '';
    if (function_exists('curl_init')) {
      $http_headers                           = array();
      $http_headers[]                         = 'Expect:';
      $http_headers[]                         = 'Content-Type: text/plain';
      $http_headers[]                         = 'Host: whos.amung.us';
      $opts                                   = array();
      $opts[CURLOPT_URL]                      = $url;
      $opts[CURLOPT_HTTPHEADER]               = $http_headers;
      $opts[CURLOPT_CONNECTTIMEOUT]           = 5;
      $opts[CURLOPT_TIMEOUT]                  = 10;
      $opts[CURLOPT_USERAGENT]                = 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17';
      $opts[CURLOPT_HEADER]                   = FALSE;
      $opts[CURLOPT_RETURNTRANSFER]           = TRUE;
      
      # Initialize PHP/CURL handle
      $ch = curl_init();
      curl_setopt_array($ch, $opts);
      # Create return array
      $result = curl_exec($ch);
      curl_close($ch);
    } elseif (ini_get('allow_url_fopen')) {
      $result = file_get_contents($url);
    }
 
    return intval($result);
}
	function insertdb($data){
// Inserting in Table(students) of Database(college)
    $this->db->insert('nguoidung',$data);
    }

	function updatedb($id,$data){
	$this->db->where('id', $id);
	$this->db->update('nguoidung', $data);
	}
		function insertdba($data,$db){
// Inserting in Table(students) of Database(college)
    $this->db->insert($db, $data);
    }
	function updatedbacc($id,$data){
	$this->db->where('id', $id);
	$this->db->update('baidang', $data);
	}
	function existsdb($id)
	{
	$this->db->where('id',$id);
    $query = $this->db->get('nguoidung');
	return $query->num_rows();
	}
	 function checkUser($id,$email,$name){
	
       if ($this->existsdb($id) > 0){
	   $data = array('id' => $id, 'name' => $name,'email' => $email);
	   $this->updatedb($id,$data);
			}else{
	   $data = array('id' => $id, 'name' => $name,'email' => $email,'cash' => 0,'trangthai' => 1);
	   $this->insertdb($data);
		}
		$this->db->where('id',$id);
		$qa = $this->db->get("nguoidung");
		return $qa->result_array();
		}
		 function getHis($id){
		$this->db->where('id',$id);
		$this->db->order_by("uid","desc");
		$qa = $this->db->get("lichsumua");
		return $qa->result_array();
		}
		 function getHisall(){
		$this->db->order_by("uid","desc");
		$qa = $this->db->get("lichsumua");
		return $qa->result_array();
		}
		 function getHisnap($id){
		$this->db->where('id',$id);
		$this->db->order_by("uid","desc");
		$qa = $this->db->get("lichsunap");
		return $qa->result_array();
		}
		 function getHisnapall(){
		$this->db->order_by("uid","desc");
		$qa = $this->db->get("lichsunap");
		return $qa->result_array();
		}
}

?>