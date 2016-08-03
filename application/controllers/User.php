<?php 

class User extends MY_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('public/upload',array('error'=>''));
		//$this->load->view('public/upload',$msg);
		
	}
	public function check()
	{
		
		$this->load->view('file_model');
		
	}	
	
    public function upload_file()
	{
		$status="";
		$msg="";
		$filename='file';


		if($status !="error")
		{
			$config['upload_path']='./file/';
			$config['allowed_types']='pdf|gif|jpg|png|jpeg';
			$config['max_size'] =1024 * 10;
			$config['encrypt_name']=true;
			
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload($filename))
			{
			  $error= array('error' =>$this->upload->display_errors());	
			  $this->load->view('public/upload',$error);
			
			}
			else
			{
				$this->load->model('file_model');
				$data1 = $this->upload->data();
				
				$file_id= $this->file_model->insert_file($_POST['MEMBER_ID'],$_POST['mode'],$_POST['amount'],$_POST['date1'],$data1['file_name'],$data1['file_type']);
				if($file_id)
				{
					$msg=" successfully done ";
					//$this->load->view('public/upload',$msg);
					redirect('/');
					
				}
				else
				{
				  unlink($data1['full_path']);
				  $status ="error";
				  $msg ="please try again";
				}
				
			}

			
		}
		
	}	
	
	
}

?>
				<!--
						if(empty($_POST['MEMBER_ID']))
		{
		  $status ="error";
		  $msg ="please Enter Member_id";
		}
				var_dump($data1);
				var_dump($_POST['MEMBER_ID']);
				var_dump($_POST['mode']);
				var_dump($data1['file_name']);
				$status="error";
					echo $msg;
							/*$this->load->library('form_validation');
		$this->form_validation->set_rules('MEMBER_ID','MEMBER_ID','trim|required');
		$this->form_validation->set_rules('mode','mode','trim|required');
		$this->form_validation->set_rules('amount','amount','trim|required');
		$this->form_validation->set_rules('date1','date1','trim|required');
		$this->form_validation->set_rules('file','document','required');*/
		//echo json_encode(array('status'=>$status,'msg'=>$msg));
-->