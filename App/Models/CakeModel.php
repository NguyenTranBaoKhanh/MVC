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

        $sql = $this->conn->prepare("SELECT * FROM cakes where id=? ");
        $sql->bind_param("i", $id);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    function getByKeyword($keyword)
    {
        $keyword = '%' . $keyword . '%';
        $stmt = $this->conn->prepare("SELECT * FROM CAKES WHERE name like ?");
        $stmt->bind_param("s", $keyword);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function count()
    {
        $sql = 'select id from cakes';
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }

    function getCake($limit, $num){
        $sql= $this->conn->prepare("select * from cakes limit ?, ?");
        $sql->bind_param("ii", $limit, $num);
        $sql->execute();

        $result=$sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    //bánh theo loại
    function getCakeOfType($id, $limit, $num){
        $sql= $this->conn->prepare("select * from cakes where id_cake_type=? limit ?, ?");
        $sql->bind_param("iii", $id, $limit, $num);
        $sql->execute();

        $result=$sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    //đếm bánh theo loại để phân trang
    function countCakeOfType($id){
        $sql= $this->conn->prepare("select * from cakes where id_cake_type=?");
        $sql->bind_param("i", $id);
        $sql->execute();

        $result=$sql->get_result();

        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }
}
