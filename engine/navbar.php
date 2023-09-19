<!-- navbar -->

<?php
switch ($user ['access']) {
    case 1:
        echo '
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
                                    <li class="nav-item"><a href="' . URL . '/reg/" class="nav-link a-btn">Взлом</a></li>';
        break;
    case 0:
        echo '
        <li class="nav-item"><a href="' . URL . '/?logout" class="nav-link a-btn">Выход</a></li>
                              
        <li class="nav-item"><a href="' . URL . '/camera/" class="nav-link a-btn">камера 1</a></li>
        <li class="nav-item"><a href="' . URL . '/camera2/" class="nav-link a-btn">камера 2</a></li>
        <li class="nav-item"><a href="' . URL . '/camera3/" class="nav-link a-btn">камера 3</a></li>
        <li class="nav-item"><a href="' . URL . '/camera4/" class="nav-link a-btn">камера 4</a></li>
        <li class="nav-item"><a href="' . URL . '/profile/" class="nav-link a-btn">Личный кабинет</a></li>
                                    ';
                                    
                                    

        break;
}



?>
</div>

</body>
</html> 