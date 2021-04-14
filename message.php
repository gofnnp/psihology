<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  echo ("
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <link href='style.css' rel='stylesheet'>
  </head>
  <body>
    <div style='margin-top: 20vh; text-align: center;'>
      <h1 align='center'>Сообщение отправляется</h1>
      <span style='font-size: 1.4em;'>Через 5 секунд вы вернетесь на главную страницу.</span>
    </div>

      ");

  $name = $_POST['name'];
  $phone = $_POST['phone'];

  mail("coachhelp911@gmail.com", "Заказ звонка", "\n Имя: $name \n Телефон: $phone");
  header('Refresh: 5; URL=http://u100760.test-handyhost.ru/');

}
?>
