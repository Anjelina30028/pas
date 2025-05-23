<?php
require_once 'components/head.php';
?>
</head>

<main>
    <section class="register">
        <h1>Регистрация</h1>
        <?php
            if(isset($_GET['msg'])){
                ?>
                <h2><?=$_GET['msg']?></h2>
                <?
            }
        ?>
        <h1></h1>
        <form action="/register_met" method="post" enctype="multipart/form-data" class="register-form">
            <label for="full_name">ФИО</label>
            <input type="text" id="full_name" name="full_name" required>

            <label for="login">Логин</label>
            <input type="text" id="login" name="login" required>

            <label for="phone">Номер телефона</label>
            <input type="tel" id="phone" name="phone" required pattern="\+?[0-9\s\-\(\)]{7,}">

            <label for="avatar">Фото профиля</label>
            <input type="file" id="avatar" name="avatar" accept="image/*">

            <label for="password"
                title="Пароль должен содержать как минимум 8 символов, включая буквы и цифры"
                id="help">Пароль</label>
            <input title="Пароль должен содержать как минимум 8 символов, включая буквы и цифры"
                pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" type="password" id="password" name="password"
                required>

            <label title="Подтверждение пароля необходимо, чтобы убедиться, что вы не опечатались при создании пароля."
                for="password" id="help">Подтверждение пароля</label>
            <input type="password" id="password_repeat" name="password_repeat" required>

            <button type="submit">Зарегистрироваться</button>
        </form>
    </section>
</main>

</html>