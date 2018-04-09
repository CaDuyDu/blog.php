<?php 
	include_once 'models/Tag.php';
	class TagController
	{
		private $tag;

		function __construct()
		{
			$this->tag=new Tag();
		}

		public function index()
		{
			$data = $this->tag->All();
			require_once 'views/tag/index.php';
		}

	}
 ?>