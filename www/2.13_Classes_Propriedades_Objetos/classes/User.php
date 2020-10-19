<?php 


class User
{
private $firstName;
public $lastName;
public $email;

    



/**
 * Get the value of firstName
 */ 
public function getFirstName()
{
return $this->firstName;
}

/**
 * Set the value of firstName
 *
 * @return  self
 */ 
public function setFirstName($firstName)
{
$this->firstName = filter_var($firstName,FILTER_SANITIZE_STRING);

return $this;
}

/**
 * Get the value of lastName
 */ 
public function getLastName()
{
return $this->lastName;
}

/**
 * Set the value of lastName
 *
 * @return  self
 */ 
public function setLastName($lastName)
{
$this->lastName = filter_var($lastName,FILTER_SANITIZE_STRING);

return $this;
}

/**
 * Get the value of email
 */ 
public function getEmail()
{
return $this->email;
}

/**
 * Set the value of email
 *
 * @return  self
 */ 
public function setEmail($email)
{

if(filter_var($email,FILTER_VALIDATE_EMAIL))//validação de email
{
    $this->email = $email;
    return true;
}else{
    $this->email = null;
    return false;
}
return $this;
}
}