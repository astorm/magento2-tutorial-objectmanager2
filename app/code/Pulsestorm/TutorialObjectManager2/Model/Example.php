<?php
namespace Pulsestorm\TutorialObjectManager2\Model;

class Example
{
    protected $messageObject;
	public function __construct()
	{
		$object = new Message; //
		$this->messageObject = $object;
	}
	
    public function sendHelloAgainMessage()
    {
        return $this->messageObject->getMessage();    
    }
}