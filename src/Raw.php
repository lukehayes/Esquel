<?php

namespace LDH\Esquel;

class Raw
{
	private string $query = "";

	public function __construct() {}

	public function select() : Raw
	{
		$this->query .= "select ";

		return $this;
	}

	/**
	 * Get the generated query string.
	 *
	 * @return string.
	 */
	public function getQuery() : string
	{
		return $this->query;
	}

	/**
	 * Reset the query to an empty string.
	 *
	 * @return string.
	 */
	public function resetQuery() : void
	{
		$this->query = "";
	}
}

