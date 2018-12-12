<?php 

	/**
	 * 
	 */
	class Input
	{
		public static function getIsset($value)
		{
			if (isset($_POST[$value])) {
				return $_POST[$value];
			}elseif (isset($_GET[$value])) {
				return $_GET[$value];
			}
			return false;
		}
	}

 ?>