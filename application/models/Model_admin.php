<?php
class Model_admin extends CI_MODEL{
 
  
	public function get_contents()
	{
		$this->db->select('MEMBER_ID,mode,amount,date1,file,extension,verify');
		$this->db->from('member');
		$query=$this->db->get();
	    return $result=$query->result(); 
	    					 
	}
	
	public function count_member()
	{
		return $this->db->count_all('member');
	}
		

	public function get_contentsByID($MEMBER_ID)
	{
		$this->db->select('MEMBER_ID,mode,amount,date1,file,extension,verify');
		$this->db->from('member');
		$this->db->where('MEMBER_ID', $MEMBER_ID);
		$query=$this->db->get();
	    return $result=$query->result(); 					 
	}
	public function get_pending_content($verify)
	{
		$verify = array('successfull', 'unsuccessfull');
		$this->db->select('MEMBER_ID,mode,amount,date1,file,extension,verify');
		$this->db->from('member');
        $this->db->where_not_in('verify', $verify);
		$query=$this->db->get();
	    return $result=$query->result(); 					 
	}
    
	public function search_member($searchmember)
	{
		$this->db->select('MEMBER_ID,mode,amount,date1,file,extension,verify');
		$this->db->from('member');
		$this->db->like('MEMBER_ID',$searchmember);
		$query=$this->db->get();
		if($query->num_rows() > 0	)
		{
			return $query->result();
		}
		else
		{
			return $query->result();
		}
	}

    public function getalldata($MEMBER_ID,$data)	   
	{
	   $this->db->where('MEMBER_ID',$MEMBER_ID);
	   $this->db->update('member',$data);
	}

}

?>