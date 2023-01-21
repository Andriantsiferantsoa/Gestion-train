<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
       <a href="" class="tip-bottom"><i class="icon-sitemap"></i> Histogramme</a> <a href="#" class="current"></a> 
    </div><h1>Histogramme</h1>
  </div>
<!--End-breadcrumbs-->
<div class="container-fluid"><hr>
<div class="row-fluid">
  
  <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Histogramme</h5>
        </div>
        <div class="widget-content">
               <canvas id="chart-area"></canvas>
          </div>
  </div>
  </div>
</div></div>

<script type="text/javascript" src="<?php echo base_url('assets/js/utils.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/Chart.bundle.js') ?>"></script>
<script>
    
    var config = {
      type: 'bar',
      data: {
        datasets: [{
          data: [
            <?php foreach ($train as $ligne) {
            	echo $ligne->nbPlace .", ";
            } ?>
          ],
          backgroundColor: [

          ],
          label: 'Nombre de place'
        }],
        labels: [
          <?php foreach ($train as $ligne) {
            	echo "'".$ligne->design ."', ";
            } ?>
        ]
      },
      options: {
        responsive: true
      }
    };

    window.onload = function() {
      var ctx = document.getElementById('chart-area').getContext('2d');
      window.myPie = new Chart(ctx, config);
    };

  </script>