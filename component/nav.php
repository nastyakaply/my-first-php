<!--Допустим хотим сделать так, чтобы при разных ролях пользователей были доступны свои разделы сайта -->
<?php 
// Для этого задаем переменные авторизованный, с ролью админа, без роли - гость
$isLoggedIn = isset($_SESSION['user_id']);
$isAdmin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === TRUE;
$userRole = $_SESSION['role'] ?? 'guest';

?>

<nav class="nav-app">
    <!--Общие разделы-->
    <li class="nav-app-li">
        <a href="/" class="nav-app-a">Главная</a>
    </li>
    <li class="nav-app-li">
        <a href="/about" class="nav-app-a">О нас</a>
    </li>
    <!--Для неавторизованных-->
    <?php if(!$isLoggedIn):?>
        <li class="nav-app-li">
            <a href="/auth" class="nav-app-a">Войти</a>
        </li>
        <li class="nav-app-li">
            <a href="/register" class="nav-app-a">Регистрация</a>
        </li>
    <?php endif; ?>

    <!--Для всех авторизованных-->
    <?php if ($isLoggedIn):?>
        <li class="nav-app-li">
            <a href="/profile" class="nav-app-a">Профиль</a>
        </li> 
        <li class="nav-app-li">
            <a href="/auth" class="nav-app-a">Выход</a>
        </li>
    <?php endif;?>

    <!--Для админов-->
    <?php if ($isAdmin):?>
        <li class="nav-app-li">
            <a href="/dashboard" class="nav-app-a">Панель управления</a>
        </li>
    <?php endif;?>

</nav>