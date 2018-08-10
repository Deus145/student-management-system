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
        Classroom
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Classroom</a></li>
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
              <h3 class="box-title">Add classroom</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" method="post" action="../index.php">
              
              <div class="box-body">
                <div class="form-group" id="divName">
                  <label for="exampleInputClassroomName1">Name</label>
                  <input type="text" class="form-control" id="exampleInputClassroomName1" placeholder="Enter classroom name" name="name" id="name">
                </div>
                <div class="form-group" id="divStudentCount">
                  <label for="exampleInputStudentCount1">Student Count</label>
                  <input type="text" class="form-control" id="exampleInputStudentCount1" placeholder="Enter student count" name="student_count" id="student_count">
                </div>
                <div class="form-group" id="divHallCharge">
                  <label for="exampleInputHallCharge1">Hall Charge</label>
                  <input type="text" class="form-control" id="exampleInputHallCharge1" placeholder="Enter hall charge" name="hall_charge" id="hall_charge">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                <input type="hidden" name="do" value="add_classroom" id="">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> <!-- End of form section -->   

<script>
  
  $("form").submit(function (e){
      
      var name = $('#name').val();
      var student_count = $('#student_count').val();
      var hall_charge = $('#hall_charge').val();

      if(name == ""){
        $('#divName').addClass('has-error has-feedback');
        $('#divName').append('<span id = "spanName" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The name is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#name').keydown(function(){
            $('#divName').removeClass('has-error');
             $('#spanName').remove();
             $('#btnSubmit').atrr("disabled", false);
        });

      }

       if(student_count == ""){
        $('#divStudentCount').addClass('has-error has-feedback');
        $('#divStudentCount').append('<span id = "spanStudentCount" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The number is required"></span>');

         $('#btnSubmit').atrr("disabled", true);

        $('#student_count').keydown(function(){
            $('#divStudentCount').removeClass('has-error');
            $('#spanStudentCount').remove();
            $('#btnSubmit').atrr("disabled", false);
             

        });

      }
       if(hall_charge == ""){
        $('#divHallCharge').addClass('has-error has-feedback');
        $('#divHallCharge').append('<span id = "spanHallCharge" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The amount is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#hall_charge').keydown(function(){
            $('#divHallCharge').removeClass('has-error');
            $('#spanHallCharge').remove();
            $('#btnSubmit').atrr("disabled", false);
        });

      }

      if (name == "" || student_count == "" || hall_charge == "") {
        
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
              <h3 class="box-title">All classrooms</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Student Count</th>
                  <th>Hall Charge</th>
                  <tbody>
                    <?php
                        include_once('../controller/config.php');

                        $query = "SELECT * FROM class_room"; 
                        $result = mysqli_query($db, $query);

                        $count = 0;
                        while($row = mysqli_fetch_assoc($result)) {

                        $count++;
                    ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['student_count']; ?></td>
                      <td><?php echo $row['hall_charge']; ?></td>
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