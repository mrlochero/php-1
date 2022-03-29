<?php
class M_test extends CI_Model
{

    function existsdb($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('nguoidung');
        return $query->num_rows();

    }
    function updatedb($id,$data){
        $this->db->where('id', $id);
        $this->db->update('nguoidung', $data);
    }

    function checkUser($id,$email,$name)
    {
        if ($this->existsdb($id) > 0){
            $data = array('id' => $id, 'name' => $name,'email' => $email);
            $this->updatedb($id,$data);
        }else{
            $data = array('id' => $id, 'name' => $name,'email' => $email,'cash' => 0,'trangthai' => 1);
            $this->insertdb($data);
        }
        $this->db->where('id',$id);
        $qa = $this->db->get('nguoidung');
        return $qa->result_array();
    }
}