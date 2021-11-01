<h2><?php  echo $title ?></h2>
<?php  foreach($offices as $office_item): ?>
    <h3><?php  echo $office_item['country'] ?></h3>
    <div class ="main">
        <?php  echo $office_item['city'] ?>
    </div>
    <p><a href="<?php echo site_url('offices/');?>">View Office</a></p>
    <?php  endforeach; ?>