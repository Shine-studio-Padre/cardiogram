<html>
  <head>
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
  </head>
  <body>
  <div id="chart_div"></div>
  </body>
</html>