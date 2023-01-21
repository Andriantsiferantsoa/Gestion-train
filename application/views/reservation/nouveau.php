<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
       <a href="<?php echo base_url('reservation') ?>" class="tip-bottom"><i class="icon-sitemap"></i> reservation</a> <a href="#" class="current">Ajouter</a> 
    </div><h1>Ajouter un reservation</h1>
  </div>

<div class="container-fluid"><hr>
<div class="row-fluid">
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Ajouter un reservation</h5>
        </div>
        <div class="widget-content">
          <form method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Train n°</label>
              <div class="controls">
                <select name="numTrain">
                <?php foreach ($train as $value) {
                ?>
                    <option <?php echo set_select('numTrain', $value->numero); ?>><?php echo $value->numero; ?></option>
                <?php
                } ?>
              </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Place n°</label>
              <div class="controls">
                <select name="numPlace">
                <?php foreach ($place as $value) {
                ?>
                    <option <?php echo set_select('numPlace', $value->numero); ?>><?php echo $value->numero; ?></option>
                <?php
                } ?>
              </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Date reservation</label>
              <div class="controls">
                <input type="date" class="span11" name="dateRes" value="<?php echo set_value('dateRes'); ?>">
                <span style="color: red;"><?php echo form_error('dateRes'); ?></span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nom voyageur</label>
              <div class="controls">
                <input type="text" class="span11" name="nomVoyageur" value="<?php echo set_value('nomVoyageur'); ?>">
                <span style="color: red;"><?php echo form_error('nomVoyageur'); ?></span>
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