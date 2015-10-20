<?php

namespace Amagentow\ServiceContract\Api\Data;


interface EntityInterface
{
    public function getId();

	
    public function setId($id);
	 
	public function getattr1();
	 
	public function setattr1($attr);
	 
	public function getattr2();
	 
    public function setattr2($attr);

}
