<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
       <a href="<?php echo base_url('reservation') ?>" class="tip-bottom"><i class="icon-signout"></i> reservation</a> <a href="#" class="current">Modifier</a> 
    </div><h1>Modifier un reservation</h1>
  </div>

<div class="container-fluid"><hr>
<div class="row-fluid">
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Modifier un reservation</h5>
        </div>
        <form method="post">
        <div class="widget-content">
                <input type="hidden" class="span11" readonly="" name="numero" value="<?php echo set_value('numero', $reservation->numero); ?>">
           <div class="control-group">
              <label class="control-label">Train n°</label>
              <div class="controls">
                <select name="numTrain">
                <?php foreach ($train as $value) {
                ?>
                    <option <?php echo set_select('numTrain', $value->numero, $value->numero == $reservation->numTrain); ?> ><?php echo $value->numero; ?></option>
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
                    <option <?php echo set_select('numPlace', $value->numero, $value->numero == $reservation->numPlace); ?>><?php echo $value->numero; ?></option>
                <?php
                } ?>
              </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Date reservation</label>
              <div class="controls">
                <input type="date" class="span11" name="dateRes" value="<?php echo set_value('dateRes', $reservation->dateRes); ?>">
                <span style="color: red;"><?php echo form_error('dateRes'); ?></span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nom voyageur</label>
              <div class="controls">
                <input type="text" class="span11" name="nomVoyageur" value="<?php echo set_value('nomVoyageur', $reservation->nomVoyageur); ?>">
                <span style="color: red;"><?php echo form_error('nomVoyageur'); ?></span>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Mettre à jour</button>
            </div>
          </form>
        </div>
      </div>
      </div>

</div></div>