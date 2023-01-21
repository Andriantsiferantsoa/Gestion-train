<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
       <a href="<?php echo site_url('train') ?>" class="tip-bottom"><i class="icon-sitemap"></i> Train</a> <a href="#" class="current">Ajouter</a> 
    </div><h1>Ajouter un train</h1>
  </div>

<div class="container-fluid"><hr>
<div class="row-fluid">
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Ajouter un train</h5>
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
              <label class="control-label">Désignation</label>
              <div class="controls">
                <input type="text" class="span11" name="design" value="<?php echo set_value('design'); ?>">
                <span style="color: red;"><?php echo form_error('design'); ?></span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nombre de place</label>
              <div class="controls">
                <input type="text" class="span11" name="nbPlace" value="<?php echo set_value('nbPlace'); ?>">
                <span style="color: red;"><?php echo form_error('nbPlace'); ?></span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Numéro itinéraire</label>
              <div class="controls">
                <select name="numIti">
                <?php foreach ($itineraire as $value) {
                ?>
                    <option <?php echo set_select('numIti', $value->numero); ?>><?php echo $value->numero; ?></option>
                <?php
                } ?>
              </select>
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