<?php


class LibraryManager
{
    protected $conn;

    public function __construct()
    {
        $db = new DBconect();
        $this->conn = $db->connect();

    }

    public function getAll($table)
    {
        $sql = "SELECT * FROM $table";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function insert($table, $data)
    {

        foreach ($data as $key => $value) {
            $fields[] = $this->backtick($key);
            $placeholders[] = '?';
        }

        $fields = implode(',', $fields);
        $placeholders = implode(',', $placeholders);
        $sql = "INSERT INTO $table ($fields) values ($placeholders)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array_values($data));

    }

    private function backtick($key)
    {
        return "`" . str_replace("`", "``", $key) . "`";
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=$id";
        $this->conn->exec($sql);
    }
    public function update($table,$data,$id){
        foreach ($data as $key => $value) {
            $fields[] = $this->backtick($key);
            $placeholders[] = $value;
        }
        $fields = implode(',', $fields);
        $placeholders = implode(',', $placeholders);
        $sql = "UPDATE $table  SET $fields='$placeholders' WHERE id=$id";
        var_dump($sql);
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array_values($data));
    }
    public function join($table1,$table2,$condition){
     $sql="SELECT * FROM $table1 INNER JOIN $table2 ON $condition";
     $stmt=$this->conn->query($sql);
     $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $result=$stmt->fetchAll();
    }

}