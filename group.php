<?php 

	require_once 'templates/header.php';

 ?>
  
<div class="container" style="margin-top: 70px;">
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
        <img src="assets/img.jpg" class="img-responsive" alt="" style="height: 200px;width: 100%;">
        <div class="row text-center">
          <img src="assets/img.jpg" class="img-circle img-responsive" alt="" style="width: 100px;height: 100px;position: absolute;left: 4%;top: 150px;border: 2px solid #fff;">
          <h4>Tobi Aditia Alfani</h4>
          <h5>12 Oktober 1999</h5>
          <h5>Banjarejo - Rejotangan</h5>
        </div>
      </div>
  		<form action="">
        <div class="form-group">
          <label for="update_status">Update Status</label>
          <textarea rows="5" placeholder="Apa yang anda pikirkan?" id="update_status" class="form-control"></textarea>
        </div>
        <button class="btn-primary btn">Post</button>
      </form>
  	</div>
  	<div class="col-md-3">
      <div class="list-group">
        <a href="#" class="list-group-item disabled text-center">Online</a>
        <div class="list-group-item">
          <div class="row">
            <div class="col-md-2">
              <img src="assets/img.jpg" class="media-object img-circle"">
            </div>
            <div class="col-md-8">
              Ari Mamat
            </div>
            <div class="col-md-2">
              <div class="right" style="background-color: green;border-radius: 50%;width: 10px;height: 10px;"></div>
            </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="row">
            <div class="col-md-2">
              <img src="assets/img.jpg" class="media-object img-circle"">
            </div>
            <div class="col-md-8">
              Ari Mamat
            </div>
            <div class="col-md-2">
              <div class="right" style="background-color: green;border-radius: 50%;width: 10px;height: 10px;"></div>
            </div>
          </div>
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

<?php 

	require_once 'templates/footer.php';

 ?>