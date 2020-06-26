<?php
	class SampleAuth{

		private $session = null;

		function __construct($username,$password)
		{
			$this->authUser($username,$password);
		} 

		private function authUser($username,$password)
		{
			echo "Authenticating User \n";
			$this->session = "THESAMPLESESSION";
		}

		private function releaseUserSession()
		{
			echo "Release User Session \n";
		}

		function __destruct()
		{
			if($this->session != null)
			{
				$this->releaseUserSession();
			}
		}
	}

	$user = new SampleAuth("Niton","Radu");
	unset($user); 