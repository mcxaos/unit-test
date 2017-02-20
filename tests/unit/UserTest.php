<?php
require_once 'vendor/Autoload.php';
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	public function testFirstName()
	{
		$user = new \App\Models\User;
		$user->setFirstName('FirstName');
		$this->assertEquals($user->getFirstName(),'FirstName');
	}

	public function testLastName()
	{
		$user = new \App\Models\User;
		$user->setLastName('Last Name');
		$this->assertEquals($user->getLastName(),'Last Name');
	}

	public function testFullName()
	{
		$user = new \App\Models\User;
		$user->setFirstName('FirstName');
		$user->setLastName('LastName');

		$this->assertEquals($user->getFullName(),"FirstName LastName");
	}

	public function testTrim()
	{
		$user = new \App\Models\User;
		$user->setFirstName('First Name   ');
		$user->setLastName('   Last Name');
		$this->assertEquals($user->getFirstName(),'First Name');
		$this->assertEquals($user->getLastName(),'Last Name');
	}

	public function testEmail()
	{
		$user = new \App\Models\User;
		$user->setEmail('test@test.com');
		$this->assertRegExp("/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/i",$user->getEmail());

	}
}
?>