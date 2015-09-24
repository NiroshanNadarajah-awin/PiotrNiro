<?php

require 'ShopProductWriter.php';

class ShopProduct extends ShopProductWriter
{
	
	public $title = "default product";
	public $producerFirstName = "first name";
	public $producerMainName = "Main name";
	public $price =0;

	function __construct ($title, $firstName, $mainName, $price)
	{
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	}


	function getProducer ()
	{
		return "{$this->producerFirstName}"." {$this->producerMainName}";
	}

}


