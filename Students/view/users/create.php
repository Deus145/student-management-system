<?php include_once('../view/first.php'); ?>
<?php include_once('../view/templates/header.php'); ?>
<?php include_once('../view/sidebar.php'); ?>
<?php include_once('../view/alert.php'); ?>

<style>
  .form-control-feedback{
    pointer-events: auto;
  }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class = "content-header">
      <h1>
        Users
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Users</a></li>
      </ol>  
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add user</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" method="post" action="../index5.php">
              
              <div class="box-body">
                <div class="form-group" id="divClassification">
                  <label for="exampleInputClassification1">Classification</label>
                   <select class="form-control" id="classification_name">
                    <?php
                        include_once('../controller/config.php');

                        $query = "SELECT classification_name FROM classification"; 
                        $result = mysqli_query($db, $query);

                        
                       while( $row = mysqli_fetch_assoc($result)){
                      ?>
                    <?php echo "<option>".$row['classification_name']."</option>" ;
                    ?>
                     <?php } ?>
                  </select>
                </div>
                <div class="form-group" id="divUsername">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Username" name="username" id="username">
                </div>
                <div class="form-group" id="divEmail">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email address" name="email" id="email">
                </div>
                 <div class="form-group" id="divFirstName">
                  <label for="exampleInputFirstName1">First Name</label>
                  <input type="text" class="form-control" id="exampleInputFirstName1" placeholder="Enter first name" name="first_name" id="first_name">
                </div>
                 <div class="form-group" id="divLastName">
                  <label for="exampleInputLastName1">Last Name</label>
                  <input type="text" class="form-control" id="exampleInputLastName1" placeholder="Enter last name" name="last_name" id="last_name">
                </div>
                 <div class="form-group" id="divPassword">
                  <label for="exampleInputPassword1">Passwprd</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name="password" id="password">
                </div>
                 <div class="form-group" id="divCPassword">
                  <label for="exampleInputCPassword1">Confirm password</label>
                  <input type="text" class="form-control" id="exampleInputCPassword1" placeholder="Confirm password" name="cpassword" id="cpassword">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                <input type="hidden" name="do" value="add_user" id="">
              </div>
            </form><!-- End of form section -->
          </div>
        </div>
      </div>
    </section>  <!-- /End of main content -->

    <script>
  
  $("form").submit(function (e){
      
      var username = $('#username').val();
      var email = $('#email').val();
      var first_name = $('#first_name').val();
      var last_name = $('#last_name').val();


      if(username == ""){
        $('#divUserName').addClass('has-error has-feedback');
        $('#divUserName').append('<span id = "spanUserName" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The name is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#username').keydown(function(){
            $('#divUserName').removeClass('has-error');
             $('#spanUserName').remove();
             $('#btnSubmit').atrr("disabled", false);
        });

      }

       if(email == ""){
        $('#divEmail').addClass('has-error has-feedback');
        $('#divEmail').append('<span id = "spanEmail" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The number is required"></span>');

         $('#btnSubmit').atrr("disabled", true);

        $('#email').keydown(function(){
            $('#divEmail').removeClass('has-error');
            $('#spanEmail').remove();
            $('#btnSubmit').atrr("disabled", false);
             

        });

      }
       if(first_name == ""){
        $('#divFirstName').addClass('has-error has-feedback');
        $('#divFirstName').append('<span id = "spanFirstName" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The amount is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#first_name').keydown(function(){
            $('#divFirstName').removeClass('has-error');
            $('#spanFirstName').remove();
            $('#btnSubmit').atrr("disabled", false);
        });

      }
      if(last_name == ""){
        $('#divLastName').addClass('has-error has-feedback');
        $('#divLastName').append('<span id = "spanLastName" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The amount is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#last_name').keydown(function(){
            $('#divLastName').removeClass('has-error');
            $('#spanLastName').remove();
            $('#btnSubmit').atrr("disabled", false);
        });
      }
      if(password == ""){
        $('#divPassword').addClass('has-error has-feedback');
        $('#divPassword').append('<span id = "spanPassword" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The amount is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#password').keydown(function(){
            $('#divPassword').removeClass('has-error');
            $('#spanPassword').remove();
            $('#btnSubmit').atrr("disabled", false);
        });

      }

      if (username == "" || email == "" || first_name == "" || last_name == "" || password == "") {
        
        e.preventDefault();
        return false;
      }else {
        
      }

  });

</script>
   
  </div><!-- /.content-wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<?php include_once('../view/templates/footer.php'); ?>  