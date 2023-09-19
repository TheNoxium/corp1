<?php
 ?>

 
<div id="edit">
<form method="post">
 <div class="editmain" >
 <style>
   a {
    color: #4CAF50; /* Цвет ссылок */
    text-decoration: none; /* Убираем подчёркивание */
   }
   a:hover {
    border-bottom: 1px dashed blue; /* Добавляем синее пунктирное подчёркивание */
   }
  </style>
    <h3>Ваш логин: <?php echo htmlspecialchars($user['Login']); ?> <a href="edit">Изменить</a><br></h3>
    <h3>Ваш пароль: <?php echo htmlspecialchars($user['Password']); ?> <a href="edit-passwd">Изменить</a><br></h3>
    
    
    <br><br><br>
    
    </div>
</form>
</div>


