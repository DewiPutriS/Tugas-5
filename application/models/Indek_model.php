<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array(1, 17124000987,'Abdillah','Faqih','laki-laki',2017,'Memancing')
			,array(2, 17124000988,'Ahmad','Syarif','laki-laki', 2017,'Bernyanyi')
			,array(3, 17124000989,'Ummi','Qulsum','perempuan', 2017, 'Olahraga')
			,array(4, 18124000987,'Abduh','Somat','laki-laki', 2018,'Sepak Bola')
			,array(5, 18124000988,'Soleh ','Mukarom','laki-laki', 2018,'Melukis')
			,array(6, 18124000989,'Siti','Qomariah','perempuan',2018,'Bernyanyi')
			,array(7, 19124000887,'Dewi','Putri Setiyawati','perempuan',2019,'Nonton Film')
		);
		return $cars;

	}
}