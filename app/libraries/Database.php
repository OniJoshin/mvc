<?php
class Database {
	private $connection;
    private $hostname   = DB_HOST;
    private $username   = DB_USER;
    private $password   = DB_PASS;
    private $database   = DB_NAME;
    private $port       = DB_PORT;
    

	public function __construct() {		
			$this->connection = new MySqli($this->hostname, $this->username, $this->password, $this->database, $this->port);
	}

	public function query($sql) {
		$query = $this->connection->query($sql);

		if (!$this->connection->errno) {
			if ($query instanceof \mysqli_result) {
				$data = [];

				while ($row = $query->fetch_assoc()) {
					$data[] = $row;
				}

				$result = new \stdClass();
				$result->num_rows = $query->num_rows;
				$result->row = isset($data[0]) ? $data[0] : [];
				$result->rows = $data;

				$query->close();

				return $result;
			} else {
				return true;
			}
		} else {
			throw new \Exception('Error: ' . $this->connection->error  . '<br />Error No: ' . $this->connection->errno . '<br />' . $sql);
		}
	}

	public function escape($value) {
		return $this->connection->real_escape_string($value);
	}
	
	public function countAffected() {
		return $this->connection->affected_rows;
	}

	public function getLastId() {
		return $this->connection->insert_id;
	}
	
	public function isConnected() {
		return $this->connection->ping();
	}
	
	public function close() {
		if (!$this->connection) {
			$this->connection->close();
		}
	}
}