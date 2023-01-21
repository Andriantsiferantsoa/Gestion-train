<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
       <a href="" class="tip-bottom"><i class="icon-sitemap"></i> TRAIN</a> <a href="#" class="current">Liste</a> 
    </div><h1>TRAIN</h1>
  </div>
<!--End-breadcrumbs-->
<div class="container-fluid"><hr>
<div class="row-fluid">
<a href="<?php echo site_url('train/nouveau') ?>" class="btn btn-info"><i class="icon-plus"></i> Ajouter</a>
  
  <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Liste des trains</h5>
        </div>
        <div class="widget-content">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <th>Numéro</th>
                  <th>Désignation</th>
                  <th>Nombre de place</th>
                  <th>Num Itinéraire</th>
                  <th>Action</th>
                </thead>
                <?php foreach ($train as $ligne) { ?>
                
                <tr>
                  <td><?php echo $ligne->numero; ?></td>
                  <td><?php echo $ligne->design; ?></td>
                  <td><?php echo $ligne->nbPlace; ?></td>
                  <td><?php echo $ligne->numIti; ?></td>
                  <td style="text-align: center;">
                    <a href="<?php echo site_url('train/edit/'.$ligne->numero) ?>" class="btn btn-info" id="<?php echo $ligne->numero; ?>"><i class="icon-pencil"></i></a> 
                    <a href="<?php echo site_url('train/delete/'.$ligne->numero) ?>" onclick="return false;" class="btn btn-danger suppr_user"><i class="icon-remove"></i></a> 
                    <a href="<?php echo site_url('train/voir/'.$ligne->numero) ?>" class="details_s btn btn-default"><i class="icon-eye-open"></i></a>
                  </td>
                </tr>
                
                <?php } ?>
              </table>
          </div>
          </div>
  </div>
</div></div>
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Suppression</h4>
            </div>
            <div class="modal-body">
              <p>Voulez-vous vraiment supprimer ?</p>
            </div>
            <div class="modal-footer">
              <a id="btn" href="<?php echo site_url('entrant/delete') ?>/" type="button" class="btn btn-danger"><i class="icon-trash"></i> Supprimer</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
          </div>
          
        </div>
      </div>