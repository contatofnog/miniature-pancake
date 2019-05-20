<?php

class Test {

	private $name;

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
}

$obj = new Test;
$obj->setName('Felipe');
print $obj->getName();
