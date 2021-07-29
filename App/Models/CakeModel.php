<?php

use App\Core\Database;


//đã require trong index rồi
class CakeModel extends Database
{

    function all()
    {
        $sql = 'SELECT * FROM Cakes';
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }


    function getById($id)
    {
        // $sql="SELECT * FROM nhomhanghoa where manhom='$id' ";

        $sql = $this->conn->prepare("SELECT * FROM nhomhanghoa where manhom=? ");
        $sql->bind_param("i", $id);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all();
        } else {
            return false;
        }
    }
}
