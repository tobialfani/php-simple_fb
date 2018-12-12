<?php 

  require_once 'templates/header.php';
  $uac->search_users($cari);
  $uac->search_groups($cari);
  $uac->search_status($cari);
  $result_search_user = $uac->getSearchUser();
  $result_search_groups = $uac->getSearchGroups();
  $result_search_status = $uac->getSearchStatus();

 ?>
  
<div class="container" style="padding-top: 70px;padding-bottom: 50px;width: 750px;">
  <div class="alert alert-info"> Hasil pencarian  "<?= $cari;?>" </div>
  <div class="panel panel-default">
    <div class="panel-heading text-center bold">Users</div>
    <div class="panel-body" style="padding: unset;">
      <div class="list-group" style="margin-bottom: unset;">
        <?php
        while ($search = $result_search_user->fetch_assoc()) {
         ?>
        <a href="" class="list-group-item">
          <img src="assets/img.jpg" class="img-circle img-responsive" alt="" style="width: 50px;height: 50px;float: left;margin-right: 10px;">
          <div class="identStat" >
            <p class="bold" style="margin-bottom: unset;"><span style="background-color: yellow;"><?= $search['first_name'].' '.$search['last_name'];?>
            <p style="color: #A1A1A1;">19.43 20 April 2020</p>
          </div>
        </a>
        <?php 
        } 
        ?>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading text-center bold">Status</div>
    <div class="panel-body" style="padding: unset;">
      <div class="list-group" style="margin-bottom: unset;">
        <?php
        while ($search = $result_search_status->fetch_assoc()) {
         ?>
        <a href="" class="list-group-item">
          <img src="assets/img.jpg" class="img-circle img-responsive" alt="" style="width: 50px;height: 50px;float: left;margin-right: 10px;">
          <div class="identStat" >
            <p class="bold" style="margin-bottom: unset;"><span style="background-color: yellow;"><?= $search['status_'];?>
            <p style="color: #A1A1A1;">19.43 20 April 2020</p>
          </div>
        </a>
        <?php 
        } 
        ?>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading text-center bold">Groups</div>
    <div class="panel-body" style="padding: unset;">
      <div class="list-group" style="margin-bottom: unset;">
        <?php
        while ($search = $result_search_groups->fetch_assoc()) {
         ?>
        <a href="" class="list-group-item">
          <img src="assets/img.jpg" class="img-circle img-responsive" alt="" style="width: 50px;height: 50px;float: left;margin-right: 10px;">
          <div class="identStat" >
            <p class="bold" style="margin-bottom: unset;"><span style="background-color: yellow;"><?= $search['name_group'];?>
            <p style="color: #A1A1A1;">19.43 20 April 2020</p>
          </div>
        </a>
        <?php 
        } 
        ?>
      </div>
    </div>
  </div>
</div>

<?php 

  require_once 'templates/footer.php';

 ?>