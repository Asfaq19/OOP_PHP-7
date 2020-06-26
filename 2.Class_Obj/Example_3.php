<?php
	class User{

		private $name = "";

		public function __construct($name)
		{
			$this->name=$name;
		}

		public function setName($name)
		{
			$this->name=$name;
		}

		public function showName()
		{
			echo "Name: ".$this->name."\n";
		}
	}

	# Call by Value :
    // $u1 = new User("khan");
	// $u2 = $u1;

	// $u1->setName("hasan");
	// $u1->showName();
	// $u2->showName();

	// $u1 = NULL;
	// $u2->showName();
	// $u1->showName();

	# User er onno ekta nam sudhu..$u3,$u4
	# Call By Reference :
	// $u3 = new User("hasan");
	// $u4 = &$u3;

	// $u4->showName();
	// $u3->showName();

	// $u3->setName("Khan");
	// $u4->showName();
	// $u3->showName();

	// $u3=NULL;
	// $u4->showName();
