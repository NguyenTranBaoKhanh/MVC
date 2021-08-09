<?php

use App\Core\Database;


//đã require trong index rồi
class CartModel extends Database
{


    //thêm cake dô cart
    function addToCart($data)
    {
        $cakeId = $data['cakeId'];
        $userId = $data['userId'];
        $amount = isset($data['amount']) ? $data['amount'] : 1;

        //kiểm tra có cake trong cart chưa
        $check = $this->checkCakeInCart($userId, $cakeId);
        $isSuccess = true;
        if ($check > 0) {
            //nếu có amount thì cộng thêm amount add vào
            $check =  $check + $amount;

            

            $sql = $this->conn->prepare("update cart set amount=? where id_user=? and id_cake=?");
            $sql->bind_param("iii", $check, $userId, $cakeId);
            $sql->execute();

            // $result = $sql->get_result();

            if ($sql->error) {
                $isSuccess = false;
            }
        } else {
            $sql = $this->conn->prepare("insert into cart(id_cake, id_user, amount) values(?, ?, ?)");
            $sql->bind_param("iii", $cakeId, $userId, $amount);
            $sql->execute();

            // $result = $sql->get_result();

            if ($sql->error) {
                $isSuccess = false;
            }
        }


        $amount = $this->getAmount($userId);
        return [
            "isSuccess" => $isSuccess,
            "amount" => $amount
        ];
    }
    //addtocart


    //trả về giá trị amount của cake có trong cart
    function checkCakeInCart($userId, $cakeId)
    {

        $sql = $this->conn->prepare("select * from cart where id_cake=? and id_user=?");
        $sql->bind_param("ii", $cakeId, $userId);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc()['amount'];
        }

        return 0;
    }
    //checkCakeInCart


    //lấy tổng amount có trong cart 
    function getAmount($userId)
    {
        $sql = $this->conn->prepare("select sum(amount) from cart where id_user=?");
        $sql->bind_param("i", $userId);
        $sql->execute();

        $result = $sql->get_result();

        return $result->fetch_row()[0];

        // if ($result->num_rows > 0) {
        //     return $result;
        // } else {
        //     return false;
        // }
    }
    //getAmount

    //xóa cake khỏi card
    function deleteCart($userId, $cakeId)
    {
        $sql = $this->conn->prepare("delete from cart where id_user=? and id_cake=?");
        $sql->bind_param("ii", $userId, $cakeId);
        $sql->execute();

        if ($sql->affected_rows > 0) {
            return true;
        }
        return false;
    }
}
