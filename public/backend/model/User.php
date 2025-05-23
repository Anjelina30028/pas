<?php

namespace model;

use services\Connect;

class User
{

    public static function getUsers($id = null)
    {
        $db = Connect::getConnect();

        $sql = "SELECT user.id, user.name, user.login, user.password, user.phone, user.image FROM users AS user";

        if ($id !== null) {
            $sql .= " WHERE id = " . (int)$id;
        }

        $users = $db->query($sql);
        $userList = [];
        while ($user = mysqli_fetch_assoc($users)) {
            $userList[] = $user;
        };

        return $userList;
    }

    public static function deleteUser($id){
        $sql = "DELETE FROM users WHERE `users`.`id` = $id";
        $db = Connect::getConnect();
        $db->query($sql);

        header('Location: /admin?message=Вы удалили пользователя');
        
    }

    public static function register_met(){

        $login = $_POST['login'];
        $phone = $_POST['phone'];
        $avatar = $_FILES['avatar'];
        $password = $_POST['password'];
        $full_name = $_POST['full_name'];
        $password_repeat = $_POST['password_repeat'];

        if($password == $password_repeat){
            $db = Connect::getConnect();
            $sql = "SELECT * From `users` WHERE `login` = '$login' OR `phone` = '$phone'";
            $query = $db->query($sql);
            print_r($query);
            if(mysqli_num_rows($query)== 0){
                $sql = "INSERT INTO `users` (`id`, `name`, `login`, `password`, `phone`, `image`) VALUES (NULL, '$full_name', '$login', '$password', '$phone', '$avatar')";
                $db->query($sql);
                header('Location: /login?msg=Вы успешно зарегистрировались');
            }else{
                header('Location: /register?msg=Пользователь с таким номером телефона или логином уже существует');
            };
        }else{
            header('Location: /register?msg=Пароли не совпадают');
        }

    }

    

    public static function login(){
        
    }
}
