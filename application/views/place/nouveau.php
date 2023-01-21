<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
       <a href="<?php echo site_url('place') ?>" class="tip-bottom"><i class="icon-sitemap"></i> place</a> <a href="#" class="current">Ajouter</a> 
    </div><h1>Ajouter un place</h1>
  </div>

<div class="container-fluid"><hr>
<div class="row-fluid">
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Ajouter un place</h5>
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
              <label class="control-label">Occupation</label>
              <div class="controls">
                <select name="occupation">
                  <option <?php echo set_select('occupation', 'Disponible'); ?>>Disponible</option>
                  <option <?php echo set_select('occupation', 'Occupé'); ?>>Occupé</option>
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