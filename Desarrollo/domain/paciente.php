<?php 

class Paciente{

	private $id;
	private $tipoid;
	private $personaid;




	/**
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return  self
	 */ 
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of tipoid
	 */ 
	public function getTipoid()
	{
		return $this->tipoid;
	}

	/**
	 * Set the value of tipoid
	 *
	 * @return  self
	 */ 
	public function setTipoid($tipoid)
	{
		$this->tipoid = $tipoid;

		return $this;
	}

	/**
	 * Get the value of personaid
	 */ 
	public function getPersonaid()
	{
		return $this->personaid;
	}

	/**
	 * Set the value of personaid
	 *
	 * @return  self
	 */ 
	public function setPersonaid($personaid)
	{
		$this->personaid = $personaid;

		return $this;
	}
}


?>