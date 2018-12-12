<?php 

  require_once 'templates/header.php';
  if (!Session::exist_session('username')) {
    header('Location:first.php');
  }

  if (Input::getIsset('submit_status')) {
    $uac->update_status(array(
      'user'    => Session::getSession('username'),
      'status_'  => Input::getIsset('status'),
      'tanggal' => $date
    ));
  }
 ?>
  
<div class="container" style="padding-top: 70px;padding-bottom: 50px;">
  <div class="row">
    <div class="col-md-2 fixed">
      <div class="list-group">
        <a href="#" class="list-group-item disabled text-center">Group</a>
        <a href="" class="list-group-item">PHP Indonesia <span class="badge">9</span></a>
        <a href="" class="list-group-item">Jual Beli Blitar</a>
        <a href="" class="list-group-item">Hijabers</a>
      </div>
      <div class="list-group">
        <a href="#" class="list-group-item disabled text-center">Pages</a>
        <a href="" class="list-group-item">Codepolitan</a>
        <a href="" class="list-group-item">IndonesiaKu <span class="badge">2</span></a>
        <a href="" class="list-group-item">Liga Inggris <span class="badge">20+</span></a>
      </div>
    </div>
    <div class="col-md-7 col-md-offset-2 offsetLeft">
      <div class="wrap-profil">
        <div class="container-image">
          <img src="assets/img.jpg" class="img-responsive image" alt="" style="height: 200px;width: 100%;">
          <div class="overlay">
            <a href="#" class="icon" title="Change Background">
              <i class="glyphicon glyphicon-camera icon-overlay" style="font-size: 36px;"></i>
            </a>
          </div>
        </div>
        <div class="row text-center">
          <div class="container-image-profile">
            <img src="assets/img.jpg" class="img-circle img-responsive image_profile" alt="" style="width: 100px;height: 100px;position: absolute;left: 4%;top: 150px;border: 2px solid #fff;">
            <div class="overlay-profile">
              <a href="#" class="icon" title="Change Image">
                <i class="glyphicon glyphicon-camera icon-overlay-profile" style="font-size: 8px;"></i>
              </a>
            </div>
          </div>
          <h4><?= $row_user['first_name'].' '.$row_user['last_name']; ?> </h4>
          <h5>12 Oktober 1999</h5>
          <h5><?= $row_user['address']; ?></h5>
          <h5>
            <a href="edit.php" class="a_edit_profil"> 
              <span class="glyphicon glyphicon-edit"></span>
              Edit Profil
            </a>
          </h5>
        </div>
      </div>
      <form action="" method="post">
        <div class="updateStatus" style="margin-bottom: 10px;">
          <div class="form-group">
            <label for="update_status">Update Status</label>
            <textarea rows="5" placeholder="Apa yang anda pikirkan?" id="update_status" name="status" class="form-control"></textarea>
          </div>
          <input type="submit" name="submit_status" class="btn-primary btn" value="Post">
        </div>
        <p class="text-center" style="font-weight: bold;">Status Terbaru</p>

        <?php 

          $uac->setViewProfile($username);
          $result_status_profile = $uac->getViewProfile();
          while($row_status_profile = $result_status_profile->fetch_assoc()){
         ?>

        <div class="panel panel-default" >
          <div class="panel-heading" style="display: flex;">
            <img src="assets/img.jpg" class="img-circle img-responsive" alt="" style="width: 50px;height: 50px;float: left;margin-right: 10px;">
            <div class="identStat" >
              <p style="font-weight: bold;margin-bottom: unset;">
                <?php  echo $row_status_profile['first_name'].' '.$row_status_profile['last_name']; ?>
              </p>
              <p style="color: #A1A1A1;">
                <?php echo $row_status_profile['tanggal']; ?>
              </p>
            </div>
            <div style="margin-left:auto;" class="actionStatus">
              <input type="submit" name="submit_edit" class="btn btn-info" value="Edit">
              <a href="delete.php?id_status=<?= $row_status_profile['id_status']; ?>" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
              </a>
            </div>
          </div>
          <div class="panel-body">
            <?php echo $row_status_profile['status_']; ?>
          </div>
          <div class="panel-footer" style="padding: 0 15px;">
            <div class="row text-center">
              <div class="col-md-4 hover1" style="border-right: 1px solid #ddd;" name="likes">
                <?php echo $row_status_profile['likeS']; ?>
                <i class="glyphicon glyphicon-thumbs-up"></i>
              </div>
              <div class="col-md-4 hover1">
                <i class="glyphicon glyphicon-comment"></i> Komentari
              </div>
              <div class="col-md-4 hover1" style="border-left: 1px solid #ddd;">
                <i class="glyphicon glyphicon-share-alt"></i> Bagikan
              </div>
            </div>
          </div>
        </div>
        <?php }//end_while ?>
      </form>
    </div>
    <div class="col-md-3">
      <div class="list-group">
  			<a href="#" class="list-group-item disabled text-center">Online</a>
        <div class="list-group-item" style="display: flex;align-items: center;">
          <img src="assets/img.jpg" alt="" class="img-responsive img-circle" style="width: 40px;height: 40px;">
          <div style="margin: 0 10px;">mm
            
          </div>
          <div class="right" style="background-color: green;border-radius: 50%;width: 10px;height: 10px;margin-left: auto;"></div>
        </div>
        
		  </div>
      <div class="list-group">
        <a href="#" class="list-group-item disabled text-center">Pages</a>
        <a href="" class="list-group-item">Codepolitan</a>
        <a href="" class="list-group-item">IndonesiaKu <span class="badge">2</span></a>
        <a href="" class="list-group-item">Liga Inggris <span class="badge">20+</span></a>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Status -->


  <!-- Modal -->
  <!-- <div class="modal fade" id="myModal<?php //echo $row_status_profile['id_status']; ?>" role="dialog">
    <div class="modal-dialog"> -->
    
      <!-- Modal content-->
      <!-- <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   -->


<?php 

  require_once 'templates/footer.php';

 ?>