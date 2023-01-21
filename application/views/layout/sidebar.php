<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
  		<li <?php if($active == 'train') echo 'class="active"'; ?>><a href="<?php echo site_url('train'); ?>"><i class="icon icon-reorder"></i> <span>Train</span></a> </li>
  		<li <?php if($active == 'place') echo 'class="active"'; ?>> <a href="<?php echo site_url('place'); ?>"><i class="icon icon-reorder"></i> <span>Place</span></a> </li>
    	<li <?php if($active == 'itineraire') echo 'class="active"'; ?>><a href="<?php echo site_url('itineraire'); ?>"><i class="icon icon-reorder"></i> <span>Itinéraire</span></a></li>
      <li <?php if($active == 'reservation') echo 'class="active"'; ?>><a href="<?php echo site_url('reservation'); ?>"><i class="icon icon-reorder"></i> <span>Reservation</span></a></li>
      <li <?php if($active == 'histogramme') echo 'class="active"'; ?>><a href="<?php echo site_url('train/histo'); ?>"><i class="icon icon-reorder"></i> <span>Histogramme</span></a></li>
  </ul>
</div>
