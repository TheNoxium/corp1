<!-- navbar -->

<?php
switch ($user ['access']) {
    case 1:
        echo '<li class="nav-item"><a href="' . URL . '/admin/list" class="nav-link a-btn">Админ-панель</a></li>
              ';
        break;
}
?>
<html>
</head>
    <body>
    <div class="nav-bar">
<?php
switch (!$user ) {
    case 1:
        echo '
                                    <li class="nav-item"><a href="' . URL . '/auth/" class="nav-link a-btn ">Вход</a></li>
                                    ';
        break;
    case 0:
        echo '
        <li class="nav-item"><a href="' . URL . '/?logout" class="nav-link a-btn">Выход</a></li>
        <li class="nav-item"><a href="' . URL . '" class="nav-link a-btn ">Управление замками</a></li>                            
        <li class="nav-item"><a href="' . URL . '/camera/" class="nav-link a-btn">Управление камерами</a></li>
        <li class="nav-item"><a href="' . URL . '/profile/" class="nav-link a-btn">Личный кабинет</a></li>
                                    ';
                                    
                                    

        break;
}



?>
</div>

</body>
</html> 