<?php 

	/**
	 * 
	 */
	class Session
	{
		
		public function exist_session($nama)	

		{
			return isset($_SESSION[$nama]) ? true : false;
		}
		public function setSession($session_name,$session_value)
		{
			return $_SESSION[$session_name] = $session_value;
		}

		public function getSession($session_name)
		{
			return $_SESSION[$session_name];
		}

	}

 ?>