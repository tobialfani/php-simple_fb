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


  $uac->setView();
  $result_status = $uac->getView();
          
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
          while($row_status = $result_status->fetch_assoc()){
         ?>

        <div class="panel panel-default" >
          <div class="panel-heading">
            <img src="assets/img.jpg" class="img-circle img-responsive" alt="" style="width: 50px;height: 50px;float: left;margin-right: 10px;">
            <div class="identStat" >
              <p style="font-weight: bold;margin-bottom: unset;">
                <?php  echo $row_status['first_name'].' '.$row_status['last_name']; ?>
              </p>
              <p style="color: #A1A1A1;">
                <?php echo $row_status['tanggal']; ?>
              </p>
            </div>
          </div>
          <div class="panel-body">
            <?php echo $row_status['status_']; ?>
          </div>
          <div class="panel-footer" style="padding: 0 15px;">
            <div class="row text-center">
              <div class="col-md-4 hover1" style="border-right: 1px solid #ddd;">
                <i class="glyphicon glyphicon-thumbs-up"></i> Suka
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

        <?php  //while($row_status = $result_status->fetch_assoc()){ ?>
        <div class="list-group-item" style="display: flex;align-items: center;">
          <img src="assets/img.jpg" alt="" class="img-responsive img-circle" style="width: 40px;height: 40px;">
          <div style="margin: 0 10px;">Tobi
              <?php //echo $row_status['tanggal']; ?>
          </div>
          <div class="right" style="background-color: green;border-radius: 50%;width: 10px;height: 10px;margin-left: auto;"></div>
        </div>
        <?php //} ?>
        
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

<?php 

	require_once 'templates/footer.php';

 ?># php-simple_fb
# php-simple_fb
