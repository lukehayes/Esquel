<?php
namespace LDH\Esquel;

class Raw
{
	private string $query = "";

	public function __construct() {}

		/**
		 * Generate the select from section of the SQL.
		 *
		 * @param array $table_columns    All of the table columns to be retrieved.
		 *
		 * @return string.
		 */
		public function select(...$table_columns) : Raw
		{
			$this->query .= "select";
			$table_column_count = count($table_columns);

			for($i = 0; $i <= $table_column_count - 1; $i++)
			{
				$this->query .= " " . $table_columns[$i] . ",";
			}

			// TODO Fix this later.
			$this->query = rtrim($this->query, ',');

			return $this;
		}

	/**
	 * Add table for the selected columns.
	 *
	 * @param string $table_name    The Table to search from.
	 *
	 * @return string.
	 */
	public function from(string $table_name) : Raw
	{
		$this->query .= " from " . $table_name;

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

	/**
	 * Query Setter.
	 *
	 * @return string.
	 */
	public function setQuery(string $str) : void
	{
		$this->query = $str;
	}

	/**
	 * Raw object to string magic method.
	 *
	 * @return string.
	 */
	public function __toString() : string
	{
		return $this->query;
	}
}

