<?php
	
	class Consultant{

		private $name = "";
		private $role = "";

		public function __construct($name,$role)
		{	
			$this->name = $name;
			$this->role = $role;
		} 

		public function showRoles()
		{
			echo "Name: ".$this->name."\n";
			echo "Role: ".$this->role;
		}
	}

	// $data = [];
	// var_dump($data);
	// $r1 = new Consultant("Elahi","Enterprise Architect");
	// $data[]=$r1;
	// var_dump($data);
	// $r2 = new Consultant("Hasan","Product Architect");
	// $data[]=$r2;
	// var_dump($data);
	// $r3 = new Consultant("Hafij","System Architect");
	// $data[]=$r3;
	// var_dump($data);

	$data = [];
	$data[] = new Consultant("Elahi","Enterprise Architect");
	$data[] = new Consultant("Hasan","Product Architect");
	$data[] = new Consultant("Hafij","System Architect");




	$i=1;
	foreach($data as $d1)
	{
		echo "\nRoll #".$i.":\n";
		$d1->showRoles();
		$i++;
	}

	// phpinfo();
// print_r(gd_info());

// header("Content-type: image/png");
// $canvas = imagecreate(300,380);
// $blue=imagecolorallocate($canvas, 90, 100, 100);
// $white=imagecolorallocate($canvas, 255, 255, 255);
// imageline($canvas,10,10,200,200,$white);
// imagepng($canvas);
// imagedestroy($canvas);
