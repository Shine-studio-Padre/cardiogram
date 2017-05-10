<?php
  //Если форма отправлена
  if(isset($_POST['submit'])) {
 //Проверка Поля ИМЯ
  if(trim($_POST['contactname']) == '') {
  $hasError = true;
  } else {
  $name = trim($_POST['contactname']);
  }
 //Проверка поля ТЕМА
  if(trim($_POST['subject']) == '') {
  $hasError = true;
  } else {
  $subject = trim($_POST['subject']);
  }
 //Проверка правильности ввода EMAIL
  if(trim($_POST['email']) == '')  {
  $hasError = true;
  } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
  $hasError = true;
  } else {
  $email = trim($_POST['email']);
  }
 //Проверка наличия ТЕКСТА сообщения
  if(trim($_POST['message']) == '') {
  $hasError = true;
  } else {
  if(function_exists('stripslashes')) {
  $comments = stripslashes(trim($_POST['message']));
  } else {
  $comments = trim($_POST['message']);
  }
  }
 //Если ошибок нет, отправить email
  if(!isset($hasError)) {
  $emailTo = 'superspax45@gmail.com'; //Сюда введите Ваш email
  $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
  $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
 mail($emailTo, $subject, $body, $headers);
  $emailSent = true;
  }
  }
  ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Создание сайтов в городе Тюмень</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/slider.js">
    </script>
     <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
 <script src="jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="wrapper">

        <header>
            <h1>
                Док
            </h1>
            <span class="tel">79820000000</span>
                       <nav>
                <ul>
                    <li class="current">
                        <a href="Contacts.php" title="Контакты">Контакты</a>
                    </li>
                    <li >
                        <a href="Aboutus.html" title="О нас">О нас</a>
                    </li>
                    <li>
                        <a href="index.html" title="Главная">Главная</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="ab_block">
            <h1>Услуги</h1>
        </div>
        <div class="main-block">
            <main>
                     <div id="contact-wrapper">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
  <div>
  <label for="name"><strong>Имя:</strong></label>
  <input type="text" size="50" name="contactname" id="contactname" value="" />
  </div>
 <div>
  <label for="email"><strong>Email:</strong></label>
  <input type="text" size="50" name="email" id="email" value="" />
  </div>
 <div>
  <label for="message"><strong>Сообщение:</strong></label>
  <textarea rows="5" cols="50" name="message" id="message"></textarea>
  </div>

  <input type="submit" value="Отправить" name="submit" />
  </form>
  </div>
            </main>
            <div class="side-bar">
                <div class="sb-block">
                    <h3 class="title">Навигация</h3>
                    <ul class="design">
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
        <ul class="pod">
            <li>
                <h2>Текст</h2>
                <p>ТекстТекстТекстТекст:<br />1)ТекстТекстТекств <br />2)ТекстТекстТекст
                    <br />3)ТекстТекстТекст</p>
            </li>
            <li>
                <h2>Текст</h2>
                <p>ТекстТекстТекстТекстТекстТекстТекстТекст</p>
            </li>
            <li>
                <h2>ТекстТекст</h2>
                <p>ТекстТекстТекстТекст:<br />1)ТекстТекстТекстТекстТекст<br />2)ТекстТекстТекст<br />3)ТекстТекстТекст</p>
            </li>
        </ul>
        <div class="opi">
            <p>© 2017. sait.ru</p>
        </div>
    </div>
</body>

</html>