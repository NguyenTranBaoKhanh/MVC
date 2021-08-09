<?php

use App\Core\Database;


//đã require trong index rồi
class UserModel extends Database
{

    function checkLogin($data)
    {
        if (isset($data)) {
            $email = $data['email'];
            $password = $data['password'];
        } else {
            return "không có data";
        }

        $sql = $this->conn->prepare("select * from users where email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {

            $passwordHashed = $result->fetch_assoc()['password'];
            $isPassword = password_verify($password, $passwordHashed);

            if ($isPassword == true) {
                return true;
            } else {
                return "Password incorrect!";
            }
        } else {

            return "Do not email exists: " . $email;
        }
    }

    function getEmail($email)
    {

        $sql = $this->conn->prepare("select id, name, phone, email, avatar from users where email= ? ");
        $sql->bind_param("s", $email);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
    function register($data)
    {
        if (isset($data)) {
            $name = $data['name'];
            $phone = $data['phone'];
            $address = $data['address'];
            $email = $data['email'];
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            $role = 1;
            $avt = "user.png";

            $sql = $this->conn->prepare("insert into users(name, phone, address, email, password, role, avatar) value(?, ?, ?, ?, ?, ?, ?)");
            $sql->bind_param("sssssis", $name, $phone, $address, $email, $password, $role, $avt);
            $sql->execute();

            //coi đã insert dô chưa, nếu dô thì affaced_rows > 1
            $result = $sql->affected_rows;


            if ($result < 1) {
                return false;
            } else {
                return true;
            }
        }
        return false;
    }

    function isUserName($email)
    {
        $sql = $this->conn->prepare("select * from users where email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
