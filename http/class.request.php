<?php
class HttpRequest{
	public $method;
	public $POST;
	public $GET;
	public $FILES;
	public $REQUEST;
	public $META;
	public $COOKIE;
	public $SESSION;
	public $user;
	
	public function __construct (
			$COOKIE,
			$FILES,
			$GET,
			$POST,
			$REQUEST,
			$SESSION,
			$SERVER
		){
		$this->COOKIE = $COOKIE;
		$this->FILES = $FILES;
		$this->GET = $GET;
		$this->POST = $POST;
		$this->REQUEST = $REQUEST;
		$this->SESSION = $SESSION;
		$this->META = $SERVER;
		
		//Global User Object Var
		//loggedInUser can be used globally if constructed
		if(isset($SESSION["authUser"]) && is_object($SESSION["authUser"]))
		{
			$this->user = $SESSION["authUser"];
		}else{
			//Then create a user with no user id: Anonymous User, 
			//who can be saved later! Swag!
			$this->user = R::dispense("user");
		}
		$this->method = $SERVER["REQUEST_METHOD"];
	}
		
	public function __toString(){
		return "HttpRequest";
	}
} 
?>