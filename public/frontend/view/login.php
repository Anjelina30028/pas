    <?php
    require_once 'components/head.php';
    ?>
    </head>

    <main>
        <section class="auth">
            <h1>Авторизация</h1>
            <?php
            if (isset($_GET['msg'])) {
            ?>
                <h2><?= $_GET['msg'] ?></h2>
            <?
            }
            ?>
            <form action="/login" method="post" class="auth-form">
                <label for="username">Логин</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Войти</button>
            </form>
            <a href="/register" class="main_button">Нет профиля?</a>
        </section>
    </main>

    <?php
    require_once "components/foot.php";
    ?>

    </html>