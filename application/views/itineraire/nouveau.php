<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
       <a href="<?php echo site_url('itineraire') ?>" class="tip-bottom"><i class="icon-sitemap"></i> itineraire</a> <a href="#" class="current">Ajouter</a> 
    </div><h1>Ajouter un itineraire</h1>
  </div>

<div class="container-fluid"><hr>
<div class="row-fluid">
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Ajouter un itineraire</h5>
        </div>
        <div class="widget-content">
          <form method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Numéro</label>
              <div class="controls">
                <input type="text" class="span11" name="numero" value="<?php echo set_value('numero'); ?>">
                <span style="color: red;"><?php echo form_error('numero'); ?></span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Ville départ</label>
              <div class="controls">
                <input type="text" class="span11" name="villeDep" value="<?php echo set_value('villeDep'); ?>">
                <span style="color: red;"><?php echo form_error('villeDep'); ?></span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Ville arrivé</label>
              <div class="controls">
                <input type="text" class="span11" name="villeArr" value="<?php echo set_value('villeArr'); ?>">
                <span style="color: red;"><?php echo form_error('villeArr'); ?></span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Frais</label>
              <div class="controls">
                <input type="text" class="span11" name="frais" value="<?php echo set_value('frais'); ?>">
                <span style="color: red;"><?php echo form_error('frais'); ?></span>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success"><i class="icon-save"></i> Enregistrer</button>
            </div>
          </form>
        </div>
      </div>
      </div>

</div></div>