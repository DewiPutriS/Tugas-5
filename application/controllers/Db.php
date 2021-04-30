<?php
class Db extends CI_controller
{
	private function index()
	{
		echo "hello word";
		}
		public function panggil ()
		{
			$this->index();
		}
}