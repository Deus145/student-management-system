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
    <!--Content Header (Page header)-->
    <section class = "content-header">
      <h1>
        Lecturer
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Lecturer</a></li>
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
              <h3 class="box-title">Add lecturer</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" method="post" action="../index2.php">
              
              <div class="box-body">
                <div class="form-group" id="divFirstName">
                  <label for="exampleInputLecturerFirstName1">First Name</label>
                  <input type="text" class="form-control" id="exampleInputLecturerFirstName1" placeholder="Enter lecturer first name" name="first_name" id="first_name">
                </div>
                <div class="form-group" id="divLastName">
                  <label for="exampleInputLecturerLastName1">Last Name</label>
                  <input type="text" class="form-control" id="exampleInputLecturerLastName1" placeholder="Enter lecturer last name" name="last_name" id="last_name">
                </div>
                <div class="form-group" id="divEmail">
                  <label for="exampleInputEmail">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter email" name="email" id="email">
                </div>
                 <div class="form-group" id="divContact">
                  <label for="exampleInputContact">Contact</label>
                  <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter contact" name="contact" id="contact">
                </div>
                 <div class="form-group" id="divFacultyId">
                  <label for="exampleInputFacultyId1">Faculty ID</label>
                  <input type="text" class="form-control" id="exampleInputFacultyId1" placeholder="Enter faculty id" name="faculty_id" id="faculty_id">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                <input type="hidden" name="do" value="add_teacher" id="">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> <!-- End of form section -->   

<script>
  
  $("form").submit(function (e){
      
      var first_name = $('#first_name').val();
      var last_name = $('#last_name').val();
      var email = $('#email').val();
      var contact = $('#contact').val
      var faculty_id = $('#faculty_id').val();


      if(first_name == ""){
        $('#divFirstName').addClass('has-error has-feedback');
        $('#divFirstName').append('<span id = "spanFirstName" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The  first name is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#first_name').keydown(function(){
            $('#divFirstName').removeClass('has-error');
             $('#spanFirstName').remove();
             $('#btnSubmit').atrr("disabled", false);
        });

      }

       if(last_name == ""){
        $('#divLastName').addClass('has-error has-feedback');
        $('#divLastName').append('<span id = "spanLastName" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The last name is required"></span>');

         $('#btnSubmit').atrr("disabled", true);

        $('#last_name').keydown(function(){
            $('#divLastName').removeClass('has-error');
            $('#spanLastName').remove();
            $('#btnSubmit').atrr("disabled", false);
             

        });

      }
       if(email == ""){
        $('#divEmail').addClass('has-error has-feedback');
        $('#divEmail').append('<span id = "spanEmail" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The email is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#email').keydown(function(){
            $('#divEmail').removeClass('has-error');
            $('#spanEmail').remove();
            $('#btnSubmit').atrr("disabled", false);
        });

      }

        if(contact == ""){
        $('#divContact').addClass('has-error has-feedback');
        $('#divContact').append('<span id = "spanContact" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The contact is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#contact').keydown(function(){
            $('#divContact').removeClass('has-error');
            $('#spanContact').remove();
            $('#btnSubmit').atrr("disabled", false);
        });

      }
      if(faculty_id == ""){
        $('#divFacultyId').addClass('has-error has-feedback');
        $('#divFacultyId').append('<span id = "spanFacultyId" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The contact is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#faculty_id').keydown(function(){
            $('#divFacultyId').removeClass('has-error');
            $('#spanFacultyId').remove();
            $('#btnSubmit').atrr("disabled", false);
        });

      }

      if (first_name == "" || last_name == "" || email == "" || contact == "" || faculty_id == "") {
        
        e.preventDefault();
        return false;
      }else {
        
      }

  });

</script>

<?php 
  if(isset($_GET["do"])&&($_GET["do"] == "alert_from_insert")){

    $msg=$_GET['msg'];

    if($msg == 1){
      echo "
            <script> 
            var myModal = $('#classroom_Duplicated');
            myModal.modal('show');

            myModal.data('hideInterval', setTimeout(function(){
                myModal.modal('hide');

              }, 3000));

            </script>.";
    }
     if($msg == 2){
      echo "
            <script> 
            var myModal = $('#Insert_Success');
            myModal.modal('show');

            myModal.data('hideInterval', setTimeout(function(){
                myModal.modal('hide');

              }, 3000));
              
            </script>.";
    }
    if($msg == 3){
      echo "
            <script> 
            var myModal = $('#connection_Problem');
            myModal.modal('show');

            myModal.data('hideInterval', setTimeout(function(){
                myModal.modal('hide');

              }, 3000));
              
            </script>.";
    }
  }
  ?>

       <!-- Main content -->
    <section class="content"><!-- Start of table section -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Lecturers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Faculty ID</th>
                  <tbody>
                    <?php
                        include_once('../controller/config.php');

                        $query = "SELECT * FROM teacher"; 
                        $result = mysqli_query($db, $query);

                        $count = 0;
                        while($row = mysqli_fetch_assoc($result)) {

                        $count++;
                    ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row['first_name']; ?></td>
                      <td><?php echo $row['last_name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['faculty_id']; ?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End of table section -->
    
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