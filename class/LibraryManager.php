<?php


class LibraryManager
{
    protected $conn;

    public function __construct()
    {
        $db = new DBconnect();
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
        $fields =[];
        $placeholders=[];
        foreach ($data as $key => $value) {
           array_push($fields,$this->backtick($key));
            array_push($placeholders,'?');

        }
        $fields = implode(',', $fields);
        $placeholders = implode(',', $placeholders);
        $sql = "INSERT INTO $table ($fields) values ($placeholders)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array_values($data));
        var_dump($stmt);

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

    public function update($table, $data, $id)
    {
        $fields=[];
        $placeholders=[];
        foreach ($data as $key => $value) {
            array_push($fields,$this->backtick($key));
            array_push($placeholders,$value);
        }
        $fields = implode(',', $fields);
        $placeholders = implode(',', $placeholders);
        $sql = "UPDATE $table  SET $fields='$placeholders' WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array_values($data));
    }

    public function join($sql)
    {
        // $sql="SELECT * FROM $table1 INNER JOIN $table2 ON $table1.author_id=$table2.id where id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

}