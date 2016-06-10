<?php
class file_model extends CI_Model
{
    public function __construct(){
		parent::__construct();
	}
    
	public function insert_file($MEMBER_ID,$mode,$amount,$date1,$filename)
    {
         $data=array
		 (
		    'MEMBER_ID' =>$MEMBER_ID,
			'mode'=>$mode,
			'amount'=>$amount,
			'date1'=>$date1,
		    'file'=> $filename    			
		 );
		    $this->db->insert('member',$data);
			return TRUE;
	 }


}


?>