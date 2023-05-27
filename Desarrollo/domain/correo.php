<?php 

class Correo{

	private $id;
	private $nombre;
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
	 * Get the value of nombre
	 */ 
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Set the value of nombre
	 *
	 * @return  self
	 */ 
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;

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