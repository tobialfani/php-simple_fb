<?php 

  require_once 'templates/header.php';
  if (!Session::exist_session('username')) {
    header('Location:first.php');
  }

  if(Input::getIsset('submit_edit')){
    $uac->editData(array(
      'first_name'	=> Input::getIsset('first_name'),
			'last_name'		=> Input::getIsset('last_name'),
			'username'		=> Input::getIsset('username'),
			'address'		  => Input::getIsset('address')
    ),$row_user['id']);

    header('Location: profil.php');
  }
  
 ?>
  
<div class="container" style="padding-top: 70px;padding-bottom: 50px;">
  <div class="row">
    <div class="col-md-7 col-md-offset-2">
      <form class="table-responsive" method="post">
        <table class="table table-condensed">
            <tr>
              <td>First Name</td>
              <td><input type="text" name="first_name" class="form-control" value="<?= $row_user['first_name']; ?>"></td>
            </tr>
            <tr>
              <td>Last Name</td>
              <td><input type="text" name="last_name" class="form-control" value="<?= $row_user['last_name']; ?>"></td>
            </tr>
            <tr>
              <td>Username</td>
              <td><input type="text" name="username" class="form-control" value="<?= $row_user['username']; ?>"></td>
            </tr>
            <tr>
              <td>Address</td>
              <td><input type="text" name="address" class="form-control" value="<?= $row_user['address']; ?>"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="submit_edit" value="Edit" class="form-control btn btn-primary"></td>
            </tr>
        </table>
      </form>
    </div>
  </div>
</div>

<?php 

  require_once 'templates/footer.php';

 ?>