<?php

class UserController {

    public function actionRegister() {

        $name = '';
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $err = false;

            if (User::checkName($name)) {
                echo '<br>$name ok!';
            }else{
                $err[] = 'Имя должно содержать не менее 5 символов';
            }

            if (User::checkEmail($email)) {
                echo '<br>$email ok!';
            }else{
                $err[] = 'Некорректный E-mail!';
            }
            if (User::checkPassword($password)) {
                echo '<br>$password ok!';
            }else{
                $err[] = 'Пароль должно содержать не менее 6 символов';
            }

            if (User::checkEmailExists($email)) {
                $err[] = 'Такой E-mail существует!';
            }

            if ($err == false) {
                $result = User::register($name, $email, $password);

            }
            

        }

        require_once(ROOT . '/views/user/register.php');
        
        return true;
    }
}