<?php



if (isset($_POST['reg'])) {
    $Login = mysqli_real_escape_string($db, $_POST['Login']);
    $Password = mysqli_real_escape_string($db, ($_POST['Password']));
    $access = mysqli_real_escape_string($db, $_POST['access']);
    $Balans = mysqli_real_escape_string($db, ($_POST['Balans	']));
    $info = mysqli_real_escape_string($db, ($_POST['info']));

    $regCheck = "SELECT Login FROM Accounts WHERE Login = '$Login'";
    $getValue = mysqli_query($db, $regCheck);

    if (mysqli_num_rows($getValue) > 0)
        echo '<span style="color: #ff0000; ">Логин занят</span>';
    else if (!mysqli_query($db, "INSERT INTO Accounts (Login,Password,access,Balans,info) VALUES ('$Login','$Password',0,500,'$info') ")) {
        header('Refresh: 10');
        echo 'Произошла какая-то ошибка. <s>Страница обновится через 10 секунд</s>';
    } else {
        if (isset($Login, $Password)) {
            if ($result = !authentication($Login, $Password)) {
                echo '<span style="color: #ff0000; ">Произошла неизвестная ошибка</span>';
            } else {
                $_SESSION = array(
                    'Login' => $Login,
                    'Password' => $Password
                );
                //создание таблички
                if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                echo $Login;


                $sql = "CREATE TABLE `" . $Login . "` (auth_date DATETIME)";

                if (mysqli_query($db, $sql)) {
                    echo "Заебца табличка создана";
                } else {
                    echo "Error ошибка ты еблан: " . mysqli_error($db);
                }

                //запись даты регестрации  в таблицу
                if (mysqli_query($db, "INSERT INTO $Login SET  auth_date = '$today' ")) {


                    echo 'запись даты регестрации  в таблицуОперация выполнена успешно!';


                } else {


                    echo 'Ошибка. запись даты регестрации  в таблицу';
                }
                // создаем столбец трасфер истории
                $sql = "ALTER TABLE $Login ADD transfhistory TEXT ";

                if ($db->query($sql) === TRUE) {
                    echo "Столбец трасфер истории успешно создан";
                } else {
                    echo "Ошибка создание трасфер истории столбца" . $db->error;
                }


                // создаем столбец трасфер дата
                $sql = "ALTER TABLE $Login ADD transf_date DATETIME ";

                if ($db->query($sql) === TRUE) {
                    echo "Столбец трасфер дата успешно создан";
                } else {
                    echo "Ошибка создание трасфер дата столбца" . $db->error;
                }

                // создаем столбец трасфер истории
                $sql = "ALTER TABLE $Login ADD transfmessage TEXT ";

                if ($db->query($sql) === TRUE) {
                    echo "Столбец трасфер истории успешно создан";
                } else {
                    echo "Ошибка создание трасфер истории столбца" . $db->error;
                }

                
                
                
                mysqli_close($db);
                header('Location: ' . URL);
                exit;
            }
        }
    }
}
?>


<form id="reg_form" method="POST">
    <b> В одном комиксе у директора лечебницы, где содержится Джокер, в кабинете живут ОНИ. В каком произведении 2003 года главные герои были ИМИ?</b><br><br>


</form>

<a href="<?php echo URL ?>">На главную</a>