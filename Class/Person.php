<?php


class Personal
{
public $firstname;
public $lastname;
public $dob;
public $address;
public $positon;

public function __construct($_firstname,$_lastname,$_dob,$_address,$_position)
{
    $this->firstname = $_firstname;
    $this->lastname = $_lastname;
    $this->dob = $_dob;
    $this->address = $_address;
    $this->positon = $_position;
}

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPositon()
    {
        return $this->positon;
    }

    /**
     * @param mixed $positon
     */
    public function setPositon($positon)
    {
        $this->positon = $positon;
    }

}