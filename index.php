<?php
session_start();
// Для теста админа 
// $_SESSION['user_id'] = 1;
// $_SESSION['username'] = 'admin_test';
// $_SESSION['role'] = 'admin';
// $_SESSION['is_admin'] = true;

// Для теста обычного пользователя 
// $_SESSION['user_id'] = 2;
// $_SESSION['username'] = 'user_test';
// $_SESSION['role'] = 'user';
// $_SESSION['is_admin'] = false;

//очистить данные
// session_destroy();
include 'component/head.php';


include 'component/header.php';
include 'component/nav.php';

?>

<section>
<h1>
    tipa content
</h1>
</section>

<?php 
    include 'component/footer.php';
?>