<?php include_once "config.php" ?>
<?php include_once "function.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    
    <title><?php  echo change_title($title) ?></title>
</head>
<body>
     <header>
         <div class="header_container">
             <a href="index.php" class="header_logo">My Movie</a>
             <!-- <input placeholder = "Найти фильм" type="text" class="header_serch"> -->
             <span class="category">Жанры</span>
             <div class="header_auth">
                 <span class="user_name"></span>
                 <button class="button_register button-header">Зарегестрироваться</button>
                  <button class="button_auth button-header">Войти</button>
             </div>
         </div>
     </header>
     <div class="category-menu">
        
        <a href="category.php?gnenre=fight" class="category-item">Боевики</a>
        <a href="category.php?gnenre=anime" class="category-item">Аниме</a>
        <a href="category.php?gnenre=comedy" class="category-item">Комедии</a>
		<a href="watch.php?watch=family"  class="category-item">Семейные</a>
		<a href="watch.php?watch=adult"  class="category-item">Для взрослых</a>
		<a href="watch.php?watch=teen"  class="category-item">Для подростков</a>
    
</div>
     <div class="modal_reg">
    <span class="close-reg">&#10006;</span>
        <form action="register.php" method="post" class="form_reg">
            <input placeholder="Ваше имя" type="text" class="input_name_reg">
            <input placeholder="Ваш пароль" type="password" class="input_pass_reg">
            <input placeholder="Ваш логин" type="password" class="input_login_reg">
            <button class="button-header button-reg">Зарегестрироваться</button>
        </form>
    </div>
    <div class="modal_auth">
    <span class="close-auth">&#10006;</span>
        <form action="auth.php" method="post" class="form_auth">
            <input placeholder="Ваше логин" type="text" class="input_login_auth">
            <input placeholder="Ваш пароль" type="password" class="input_pass_auth">
            <button class="button-header button-auth">Войти</button>
        </form>
    </div>