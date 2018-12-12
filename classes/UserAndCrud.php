<?php 

	/**
	 * 
	 */
	class UserAndCrud
	{
		private $database,$status,$status_profile,$nama_username,$searchUser,$searchGroups,$searchStatus;
		function __construct()
		{
			$this->database = Database::getInstance();
		}

		public function register_user($fields = array())
		{
			//insert('nama tabel',$fields)
			if ($this->database->insert('users',$fields)) return true;
			else return false;
		}

		public function update_status($fields = array())
		{
			//insert('nama tabel',$fields)
			if ($this->database->insert('status',$fields)) return true;
			else return false;
		}

		public function editData($fields = array(),$id)
		{
			if($data = $this->database->edit('users',$fields,$id)) return true;
			else return false;
		}

		public function deleteData($id)
		{
			if($data = $this->database->delete('status',$id)) return true;
			else return false;
		}

		public function setView()
		{
			$this->status = $this->database->select('status','users','id_status');
			
		}
		public function getview()
		{
			return $this->status;
		}

		public function setViewProfile($user)
		{
			$this->status_profile = $this->database->select1('status','users',$user);
			
		}
		public function getViewProfile()
		{
			return $this->status_profile;
		}

		public function setNameUser($value)
		{
			$this->nama_username = $this->database->select2('users','username',$value);
			
		}
		public function getNameUser()
		{
			return $this->nama_username;
		}

		public function cek_nama($nama)
		{
			$data = $this->database->cek_data('users','username',$nama);
			if (empty($data)) return false; else return true ;
		}

		public function login_user($username,$password)
		{
			$data = $this->database->cek_data('users','username',$username);
			if (password_verify($password,$data['password'])) return true;
			else return false;
		}

		public function search_users($value)
		{
			$fields = array('first_name','last_name');
			$this->searchUser = $this->database->search_data($value,'users',$fields);
			if (empty($this->searchUser)) return false; else return true ;
		}
		public function search_groups($value)
		{
			$fields = array('name_group');
			$this->searchGroups = $this->database->search_data($value,'groups',$fields);
			if (empty($this->searchUser)) return false; else return true ;
		}
		public function search_status($value)
		{
			$fields = array('status_');
			$this->searchStatus = $this->database->search_data($value,'status',$fields);
			if (empty($this->searchUser)) return false; else return true ;
		}
		public function getSearchUser()
		{
			return $this->searchUser;
			return $this->searchGroups;
			return $this->searchStatus;
		}
		public function getSearchStatus()
		{
			return $this->searchStatus;
		}
		public function getSearchGroups()
		{
			return $this->searchGroups;
		}

	}

 ?>