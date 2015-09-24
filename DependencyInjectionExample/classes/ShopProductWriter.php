<?php

class ShopProductWriter
{

	public function write($shopProduct)
	{
		$str = "{$shopProduct->title}: ".
				$shopProduct->getProducer().
				" ({$shopProduct->price})\n";

				print $str;
	}
}
