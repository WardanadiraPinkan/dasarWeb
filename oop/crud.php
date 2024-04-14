<?php
require_once 'Database.php';

class Crud {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Create
    public function create($jabatan, $keterangan) {
        $query = "INSERT INTO Jabatan (Jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        $result = $this->db->conn->query($query);
        
        return $result;
    }

    // Read
    public function read() {
        $query = "SELECT * FROM Jabatan";
        $result = $this->db->conn->query($query);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Read By ID
    public function readById($id) {
        $query = "SELECT * FROM Jabatan WHERE id = $id";
        $result = $this->db->conn->query($query);

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    // Update
    public function update($id, $jabatan, $keterangan) {
        $query = "UPDATE Jabatan SET Jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = $id";
        $result = $this->db->conn->query($query);

        return $result;
    }

    // Delete
    public function delete($id) {
        $query = "DELETE FROM Jabatan WHERE id = $id";
        $result = $this->db->conn->query($query);

        return $result;
    }
}
