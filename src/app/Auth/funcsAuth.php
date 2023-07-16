<?php

//функция регистрации сотрудника
function registration():bool
{
    //идентификатор подключения к базе данных
    global $pdo;

    //объявляем поля которые нам необходимо считать из формы методом post
    $name=!empty($_POST['name']) ? trim($_POST['name']) : '';
    $surname=!empty($_POST['surname']) ? trim($_POST['surname']) : '';
    $loginEmail=!empty($_POST['loginEmail']) ? trim($_POST['loginEmail']) : '';
    $pass=!empty($_POST['pass']) ? trim($_POST['pass']) : '';
    $typeAccess=!empty($_POST['typeAccess']) ? trim($_POST['typeAccess']) : '';
    $premium=!empty($_POST['premium']) ? trim($_POST['premium']) : '';
    $viewOther=!empty($_POST['viewOther']) ? trim($_POST['viewOther']) : '';
    $workingHours=!empty($_POST['workingHours']) ? trim($_POST['workingHours']) : '';
    $tourismCountries=!empty($_POST['tourismCountries']) ? trim($_POST['tourismCountries']) : '';
    $probabilityCoefficient=!empty($_POST['probabilityCoefficient']) ? trim($_POST['probabilityCoefficient']) : '';

    //делаем проверку на обязательность заполения полей логина-почты и пароля и записываем в сессию ошибку
    if(empty($loginEmail) || empty($pass)){
        $_SESSION['errors']='Поля почты и пароля обязательны к заполнению';
        return false;
    }

    //проверяем наличие даного логина-почты в базе данных из таблицы users
    $res=$pdo->prepare("SELECT COUNT(*) FROM table WHERE loginEmail=?");
    $res->execute([$loginEmail]);
    //если запрос вернет что-то отличающееся от нуля мы запишем ошибку
    if($res->fetchColumn()){
        $_SESSION['errors']='Данная почта уже зарегестрирована';
        return false;
    }
    //иначе мы хешируем пароль и добавляем нового пользователя в таблицу users
    $pass=password_hash($pass, PASSWORD_DEFAULT);
    $res=$pdo->prepare("INSERT INTO table ($name,$surname,loginEmail,pass,$typeAccess,$premium,$viewOther,$workingHours,$tourismCountries,$probabilityCoefficient) VALUES (?,?,?,?,?,?,?,?,?,?)");

    //
    if($res->execute([$name,$surname,$loginEmail,$pass,$typeAccess,$premium,$viewOther,$workingHours,$tourismCountries,$probabilityCoefficient])){
        $_SESSION['success']='Регистрация успешна';
        return true;
    }else{
        $_SESSION['errors']='Ошибка регистрации';
        return false;
    }
}

//функция авторизации
function login(): bool
{
    //идентификатор подключения к базе данных
    global $pdo;

    //считыываем введенные пользователем логин ипароль
    $loginEmail=!empty($_POST['loginEmail']) ? trim($_POST['loginEmail']) : '';
    $pass=!empty($_POST['pass']) ? trim($_POST['pass']) : '';

    //если поле логина и праоля пустые запишем ошибку в сессии
    if(empty($loginEmail) || empty($pass)){
        $_SESSION['errors']='Поля логин/пароль обязательны';
        return false;
    }

    //проверяем есть ли такой логин в базе данных
    $res=$pdo->prepare("SELECT * FROM table WHERE loginEmail=?");
    $res->execute([$loginEmail]);
    //если такой логин есть в базе, берем все данные из таблицы с помощью функции fetch
    //если такого логина нет то записываем ошибку в сессию
    if(!$user=$res->fetch()){
        $_SESSION['errors']='Логин/пароль введены не верно';
        return false;
    }

    //проверяем на соответствие введенный пароль
    if(!password_verify($pass, $user['pass'])){
        $_SESSION['errors'] = 'Логин/пароль введены не верно';
        return false;
    }else{
        $_SESSION['success']='Вы успешно авторизировались';
        $_SESSION['user']['name']=$user['login'];
        return true;
    }
}
