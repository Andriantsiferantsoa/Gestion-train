<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
       <a href="" class="tip-bottom"><i class="icon-sitemap"></i> TRAIN</a> <a href="#" class="current"></a> 
    </div><h1>TRAIN n° <?php echo $train->numero; ?></h1>
  </div>
<!--End-breadcrumbs-->
<div class="container-fluid"><hr>
<div class="row-fluid">
<h4>Nombre place disponible : <?php echo $train->nbPlace - sizeof($voyageur)?></h4>
<h4>Nombre place occupé : <?php echo sizeof($voyageur)?></h4>
  <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Liste des voyageurs</h5>
        </div>
        <div class="widget-content">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <th>Voyageurs</th>

                </thead>
                <?php foreach ($voyageur as $ligne) { ?>
                
                <tr>
                  <td><?php echo $ligne->nomVoyageur; ?></td>
                </tr>
                
                <?php } ?>
              </table>
              <form method="post">
                <b>Recette en </b>
                <input type="text" name="annee" placeholder="année (ex: 2019)">
                <input type="text" name="mois" placeholder="mois (ex: 08)">
                <input type="submit" value="Voir">
                <h4><?php 
                  $total = 0;
                  foreach ($recette as $ligne) {
                    $total = $total + $ligne->frais;
                  }
                  echo $total;
                 ?></h4>
              </form>
          </div>
          </div>
  </div>
</div></div>