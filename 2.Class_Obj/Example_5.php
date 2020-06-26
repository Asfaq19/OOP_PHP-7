<?php
	
	class User{

		private $id = "";
		private $username = "";
		private $active = "";

		public function __construct($id,$username,$active)
		{
			$this->id = $id;
			$this->username = $username;
			$this->active = $active;
		}

		public function showUserInfo()
		{
			echo "ID: ".$this->id."\n";
			echo "Username: ".$this->username."\n";
			echo "Active Status: ".$this->active."\n";
		}

	}

	function ReadUserFromDatabase(&$users)
	{
		var_dump($users);
		$table_data = [
			["1","adfg@gmail.com","1"],
			["2","admin@gmail.com","1"],
			["3","no@gmail.com","1"]
		];
		print_r($table_data);

		// print_r($table_data[0]);
		// echo "\n";
		// print_r($table_data[0][1]);
		// echo "\n";
		// print_r($table_data[0][2]);
		// echo "\n";
		// print_r($table_data[1]);


		foreach ($table_data as $td)  
		{
			$id = $td[0];
			// print_r($id);
			// echo "\n";
			$name = $td[1];
			// print_r($name);
			// echo "\n";
			$active = $td[2];
			// print_r($active);
			// echo "\n";
			// echo "\n";
			$users[] = new User($id,$name,$active) ;
			print_r($users);
		}
	}

	// $users = [];
	// print_r($users);
	ReadUserFromDatabase($users);
	// print_r(ReadUserFromDatabase($users));

	$i = 1;
	foreach ($users as $u) {
		echo "\nUsers #".$i.":\n";
		$u->showUserInfo();
		$i++;
	}
?>