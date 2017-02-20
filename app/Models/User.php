<?php
namespace App\Models;
class User
{
	protected $firstName, $lastName, $email;

	public function SetFirstName($name)
	{
		$this->firstName = trim($name);
	}
	public function getFirstName()
	{
		return 	$this->firstName;
	}

	public function setLastName($name)
	{
		$this->lastName = trim($name);
	}
	public function getLastName()
	{
		return 	$this->lastName;
	}

	public function setEmail($email)
	{
		$this->email = trim($email);
	}
	public function getEmail()
	{
		return 	$this->email;
	}

	public function getFullName()
	{
		return 	($this->firstName. ' '. $this->lastName);
	}
}

?>