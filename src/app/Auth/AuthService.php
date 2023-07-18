<?php

use App\Models\User;

class AuthService
{
    //функція реєстрації працівника
    public function registration():bool
    {
        $newUser=new User();

        $name=!empty($_POST['name']) ? trim($_POST['name']) : '';
        $newUser->name=$name;

        $email=!empty($_POST['email']) ? trim($_POST['email']) : '';
        $newUser->email=$email;

        $password=!empty($_POST['password']) ? trim($_POST['password']) : '';
        $newUser->password=$password;

        //перевірка на заповнення полів логіна та паролю
        if(empty($email) || empty($password)){
            $_SESSION['errors']='Поля почты и пароля обязательны к заполнению';
            return false;
        }

        //перевіряємо наявність даного логіна (електронної пошти) в базі даних таблиці Users
        //якщо даний логін вже є в базі запишемо помилку
        if (User::where('email', $email) -> exists()) {
            $_SESSION['errors']='Дана пошта вже зареєстрована';
            return false;
        } else {
            //інакше хешуємо пароль і додаємо нового користувача у таблицю users
            $pass=password_hash($password, PASSWORD_DEFAULT);
            $newUser->password=$pass;
            $newUser->save();
            $_SESSION['success']='Реєстрація успішна';
            return true;
        }
    }

//функція авторизації
    public function login(): bool
    {
        //считуємо введені дані користувачем
        $email = !empty($_POST['email']) ? trim($_POST['email']) : '';
        $password = !empty($_POST['password']) ? trim($_POST['password']) : '';

        //якщо поля пусті записуємо помилку
        if (empty($email) || empty($password)) {
            $_SESSION['errors'] = 'Поля логин/пароль обязательны';
            return false;
        }

        if (!User::where('email', $email) -> exists()){
            $_SESSION['errors'] = 'Логін/пароль введено не вірно';
            return false;
        }
        $userpass=User::where('email', $email) ->first();
        //перевіряемо на відповідність введений пароль
        if (!password_verify($password, $userpass->password)) {
            $_SESSION['errors'] = 'Логин/пароль введены не верно';
            return false;
        } else {
            $_SESSION['success'] = 'Вы успешно авторизировались';
            $_SESSION['user']['name'] =$userpass->email;
            return true;
        }
    }
}
