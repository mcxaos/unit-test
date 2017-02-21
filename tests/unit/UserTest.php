<?php
require_once 'vendor/Autoload.php';
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

	protected $user;
	public function setUp()
	{
		$this->user = new \App\Models\User;
		$this->user->setFirstName('First Name');
		$this->user->setLastName('Last Name');
		$this->user->setEmail('test@test.com');

	}
	/**
		@test
	*/
	public function FirstName()
	{
	
		
		$this->assertEquals($this->user->getFirstName(),'First Name');
	}

	public function testLastName()
	{
		
		
		$this->assertEquals($this->user->getLastName(),'Last Name');
	}

	public function testFullName()
	{
	
		

		$this->assertEquals($this->user->getFullName(),"First Name Last Name");
	}

	public function testTrim()
	{
		
		$this->user->setFirstName('First Name   ');
		$this->user->setLastName('   Last Name');
		$this->assertEquals($this->user->getFirstName(),'First Name');
		$this->assertEquals($this->user->getLastName(),'Last Name');
	}

	public function testEmail()
	{
	
		
		$this->assertRegExp("/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/i",$this->user->getEmail());

	}
}
?>