<?php 

	/**
	 * 
	 */
	class Database
	{
		private static $INSTANCE = null;
		private  $mysqli,
				$host 	= 'localhost',
				$user 	= 'root',
				$pass 	= '',
				$db 	= 'simple_fb';

		function __construct()
		{
			$this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db);
			if (mysqli_connect_error()) {
				echo "gagal";
			}
		}

		public static function getInstance()
		{
			if (!isset(self::$INSTANCE)) {
				self::$INSTANCE = new Database();
			}
			return self::$INSTANCE;
		}

		public function insert($table,$fields=array())
		{
			//get column
			$column = implode(", ", array_keys($fields));
			//get value array
			$valueArray = array();
			$i = 0;
			foreach ($fields as $key => $value) {
				if (is_int($value)) {
					$valueArray[$i] = $this->escape($value);
				}else{
					$valueArray[$i] = "'".$this->escape($value)."'";
				}
				$i++;
			}
			$value = implode(", ", $valueArray);

			$query = "INSERT INTO $table ($column) VALUES ($value)";

			return $this->run_query($query,"Ada Error saat memasukkan data");
		}

		public function edit($table,$fields=array(),$id)
		{
			//get column
			$column = array_keys($fields);
			//get value array
			$valueArray = array();
			$i = 0;
			foreach ($fields as $key => $value) {
				if (is_int($value)) {
					$valueArray[$i] = $this->escape($value);
				}else{
					$valueArray[$i] = "'".$this->escape($value)."'";
				}
				$i++;
			}

			$query = "UPDATE $table SET $column[0]=$valueArray[0], $column[1]=$valueArray[1], $column[2]=$valueArray[2], $column[3]=$valueArray[3] WHERE id=$id ";
			return $this->run_query($query,"Ada Error saat mengedit data");
		}

		public function delete($table,$id)
		{
			$query = "DELETE FROM $table WHERE id_status='$id' ";
			$result= $this->mysqli->query($query); return $result; 
		}

		public function cek_data($table,$column,$value)
		{
			if (!is_int($value)) $value = "'".$value."'";
			$query = "SELECT * FROM $table WHERE $column = $value";
			$result= $this->mysqli->query($query);
			while ($row = $result->fetch_assoc()) return $row;
		}

		public function select($table1,$table2,$column)
		{
			$query = "SELECT * FROM $table1 JOIN $table2 ON $table1.user = $table2.username ORDER BY $table1.id_status DESC";
			$result= $this->mysqli->query($query); return $result; 
		}

		public function select1($table1,$table2,$user)
		{
			if (!is_int($user)) $user = "'".$user."'";
			$query = "SELECT * FROM $table1 JOIN $table2 ON $table1.user = $table2.username WHERE $table1.user = $user ORDER BY $table1.id_status DESC";
			$result= $this->mysqli->query($query); return $result; 
		}

		public function select2($table,$column,$value)
		{
			if (!is_int($value)) $value = "'".$value."'";
			$query = "SELECT * FROM $table WHERE username = $value";
			$result= $this->mysqli->query($query); return $result; 
		}

		public function search_data($value,$table,$fields=array())
		{
			$many_fields = count($fields);
			for ($i=0; $i < $many_fields; $i++) { 
				if ($i < $many_fields - 1) {
					$search_fields[$i] = "$fields[$i] LIKE '%$value%' OR";
				}elseif ($i == $many_fields - 1) {
					$search_fields[$i] = "$fields[$i] LIKE '%$value%'";
				}
			}

			$string_search = implode(", ", array_values($fields));
			$string_search_query = implode(" ", array_values($search_fields));
			
			$query = "SELECT $string_search FROM $table WHERE $string_search_query";
			$result= $this->mysqli->query($query);
			return $result; 
		}

		public function run_query($query,$error_msg)
		{
			if ($this->mysqli->query($query)) return true;
			else die($error_msg);
		}

		public function escape($valuee)
		{
			return $this->mysqli->real_escape_string($valuee);
		}
	}

 ?>