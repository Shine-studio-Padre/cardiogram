<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Кардио</title>
  <?php 
  session_start();
  include("date.php");
  ?>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Пульс');

      data.addRows([
        [0, <?php echo $osx[0];?>],   [1, <?php echo $osx[1];?>],  [2, <?php echo $osx[2];?>],  [3, <?php echo $osx[3];?>],  [4, <?php echo $osx[4];?>],  [5, <?php echo $osx[5];?>],
        [6, <?php echo $osx[6];?>],  [7, <?php echo $osx[7];?>],  [8, <?php echo $osx[8];?>],  [9, <?php echo $osx[9];?>],  [10, <?php echo $osx[10];?>], [11, <?php echo $osx[11];?>],
        [12, <?php echo $osx[12];?>], [13, <?php echo $osx[13];?>], [14, <?php echo $osx[14];?>], [15, <?php echo $osx[15];?>], [16, <?php echo $osx[16];?>], [17, <?php echo $osx[17];?>],
        [18, <?php echo $osx[18];?>], [19, <?php echo $osx[19];?>], [20, <?php echo $osx[20];?>], [21, <?php echo $osx[21];?>], [22, <?php echo $osx[22];?>], [23, <?php echo $osx[23];?>],
        [24, <?php echo $osx[24];?>], [25, <?php echo $osx[25];?>], [26, <?php echo $osx[26];?>], [27, <?php echo $osx[27];?>], [28, <?php echo $osx[28];?>], [29, <?php echo $osx[29];?>],
        [30, <?php echo $osx[30];?>], [31, <?php echo $osx[31];?>], [32, <?php echo $osx[32];?>]
      ]);

      var options = {
        hAxis: {
          title: 'Время'
        },
        vAxis: {
          title: 'Пульс'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/slider.js">
    </script>
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
                    <li>
                        <a href="Contacts.php" title="Контакты">Контакты</a>
                    </li>
                    <li>
                        <a href="Aboutus.html" title="О нас">О нас</a>
                    </li>
                    <li class="current">
                        <a href="index.html" title="Главная">Главная</a>
                    </li>
                </ul>
            </nav>
        </header>
     <!-- <div class="slider-block">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="img/sli1.jpg"></li>
                    <li><img src="img/sli2.jpg"></li>
                </ul>
            </div>
        </div> -->
        <ul class="harc">
            <li class="harc_1">
                <h3>Текст</h3>
                <p>ТекстТекстТекст</p>
            </li>
            <li class="harc_2">
                <h3>ТекстТекст</h3>
                <p>ТекстТекстТекст</p>
            </li>
            <li class="harc_3">
                <h3>ТекстТекст</h3>
                <p>Вы всегда можете позвонить нам по номеру:79820000000</p>
            </li>
        </ul>
        <ul class="midle">
        
<div id="chart_div" style="width: 100%; height: 100%px;"></div>
        
        </ul>
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
            <p>© 2017. site.ru</p>
        </div>
    </div>
</body>

</html>