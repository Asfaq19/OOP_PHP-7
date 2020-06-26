<?php
	
	include_once("model/Model.php");

	class Controller{
		private $model;

		public function __construct()
		{
			$this->model = new Model();
		}
	}