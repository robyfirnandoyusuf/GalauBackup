<?php

	/**
	* @author Nando aka GreyCat
	* @category tool
	* @copyright 2019 cR0ot - CyberTeamRox
	*
	*/
	class Galaubackup
	{
		var $CI;
		var $user;
		var $pass;

		public function __construct()
		{
			$this->CI =& get_instance();
			$this->CI->load->database();
			$this->CI->load->helper('file');
			$this->CI->load->helper('download');
			$this->CI->load->library('zip');
			$this->CI->load->dbutil();
		}

		public function backup()
		{
			$db_format = array('format'=>'zip','filename'=>'backup.sql');
			$backup= $this->CI->dbutil->backup($db_format);
			
			if(!is_dir('assets/backup'))
			{
				mkdir('assets/backup');
			}

			$dbname='backup-on-'.date('d-m-y H:i').'.zip';
			$save= 'assets/backup/'.$dbname;
			$res = write_file($save,$backup);

			if ($res) 
				echo json_encode(['status'=>true]);
			else
				echo json_encode(['status'=>false]);
		}
	}
?>