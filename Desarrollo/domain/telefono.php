<?php 

class Telefono{

	private $id;
	private $numero;
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
	 * Get the value of numero
	 */ 
	public function getNumero()
	{
		return $this->numero;
	}

	/**
	 * Set the value of numero
	 *
	 * @return  self
	 */ 
	public function setNumero($numero)
	{
		$this->numero = $numero;

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