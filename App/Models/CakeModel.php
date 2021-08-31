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

    function getCake($limit, $num)
    {
        $sql = $this->conn->prepare("select * from cakes limit ?, ?");
        $sql->bind_param("ii", $limit, $num);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    //bánh theo loại
    function getCakeOfType($id, $limit, $num)
    {
        $sql = $this->conn->prepare("select * from cakes where id_cake_type=? limit ?, ?");
        $sql->bind_param("iii", $id, $limit, $num);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    //đếm bánh theo loại để phân trang
    function countCakeOfType($id)
    {
        $sql = $this->conn->prepare("select * from cakes where id_cake_type=?");
        $sql->bind_param("i", $id);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->num_rows;
        } else {
            return false;
        }
    }


    function store($data)
    {
        if (isset($data)) {
            $name = $data['name'];
            $categoryId = $data['category'];
            $size = $data['size'];
            $price = $data['price'];
            $description = $data['description'];
            $image = $data['cakeimage'];
        } else {
            return "không có data";
        }

        $sql = $this->conn->prepare("insert into cakes(name, price, size, description, id_cake_type, image) value(?, ?, ?, ?, ?, ?)");
        $sql->bind_param("siisis", $name, $price, $size, $description, $categoryId, $image);
        $sql->execute();

        //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
        $result = $sql->affected_rows;

        if ($result < 1) {
            return false;
        } else {
            return true;
        }
    }


    function update($data)
    {
        if (isset($data)) {
            $id = $data['id'];
            $name = $data['name'];
            $categoryId = $data['category'];
            $size = $data['size'];
            $price = $data['price'];
            $description = $data['description'];
            $image = $data['cakeimage'];
        } else {
            return "không có data";
        }

        if ($image == "") {
            $sql = $this->conn->prepare("update cakes set name=?, price=?, size=?, description=?, id_cake_type=? where id=?");
            $sql->bind_param("siisii", $name, $price, $size, $description, $categoryId, $id);
            $sql->execute();

            //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
            $result = $sql->affected_rows;

            if ($result < 1) {
                return false;
            } else {
                return true;
            }
        } else {
            $sql = $this->conn->prepare("update cakes set name=?, price=?, size=?, description=?, id_cake_type=?, image=? where id=?");
            $sql->bind_param("siisisi", $name, $price, $size, $description, $categoryId, $image, $id);
            $sql->execute();

            //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
            $result = $sql->affected_rows;

            if ($result < 1) {
                return false;
            } else {
                return true;
            }
        }
    }

    function delete($id)
    {
        $sql = $this->conn->prepare("delete  from cakes where id=?");
        $sql->bind_param("i",$id);
        $sql->execute();

        //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
        $result = $sql->affected_rows;

        if ($result < 1) {
            return false;
        } else {
            return true;
        }
    }
}
