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
        Courses
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Courses</a></li>
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
              <h3 class="box-title">Manage courses</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" method="post" action="../index4.php">
              
              <div class="box-body">
                <div class="form-group" id="divCourseName">
                  <label for="exampleInputCourseName1"> Course Name</label>
                  <input type="text" class="form-control" id="exampleInputCourseName1" placeholder="Enter course name" name="course_name" id="course_name">
                </div>
                <div class="form-group" id="divCourseCode">
                  <label for="exampleInputCourseCode1">Course Code</label>
                  <input type="text" class="form-control" id="exampleInputCourseCode1" placeholder="Enter course code" name="course_code" id="course_code">
                </div>
                <div class="form-group" id = "divFaculty">
                  <label>Select Faculty</label>
                  <select class="form-control" id = "faculty">
                      <?php
                        include_once('../controller/config.php');

                        $query = "SELECT faculty_name FROM faculty"; 
                        $result = mysqli_query($db, $query);

                        
                       while( $row = mysqli_fetch_assoc($result)){
                      ?>
                      foreach($row as $key => $value)
                    <?php echo "<option>".$row['faculty_name']."</option>" ;
                    ?>
                     <?php } ?>
                  </select>
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                <input type="hidden" name="do" value="add_course" id="">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> <!-- End of form section -->   

<script>
  
  $("form").submit(function (e){
      
      var course_name = $('#course_name').val();
      var course_code = $('#course_code').val();
      var faculty = $('#faculty').val();

      if(course_name == ""){
        $('#divCourseName').addClass('has-error has-feedback');
        $('#divCourseName').append('<span id = "spanCourseName" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The name is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#course_name').keydown(function(){
            $('#divCourseName').removeClass('has-error');
             $('#spanCourseName').remove();
             $('#btnSubmit').atrr("disabled", false);
        });

      }

       if(course_code == ""){
        $('#divCourseCode').addClass('has-error has-feedback');
        $('#divCourseCode').append('<span id = "spanCourseCode" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The number is required"></span>');

         $('#btnSubmit').atrr("disabled", true);

        $('#course_code').keydown(function(){
            $('#divCourseCode').removeClass('has-error');
            $('#spanCourseCode').remove();
            $('#btnSubmit').atrr("disabled", false);
             

        });

      }
       if(faculty == ""){
        $('#faculty').addClass('has-error has-feedback');
        $('#divFaculty').append('<span id = "spanFaculty" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The amount is required"></span>');

        $('#btnSubmit').atrr("disabled", true);

        $('#faculty').keydown(function(){
            $('#divFaculty').removeClass('has-error');
            $('#spanFaculty').remove();
            $('#btnSubmit').atrr("disabled", false);
        });

      }

      if (course_name == "" || course_code == "" || faculty == "") {
        
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
                  <th>Course Name</th>
                  <th>Course Code</th>
                  <th>Faculty</th>
                  <tbody>
                    <?php
                        include_once('../controller/config.php');

                        $query = "SELECT * FROM course"; 
                        $result = mysqli_query($db, $query);

                        $count = 0;
                        while($row = mysqli_fetch_assoc($result)) {

                        $count++;
                    ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row['course_name']; ?></td>
                      <td><?php echo $row['course_code']; ?></td>
                      <td><?php echo "<option>".$row['faculty_name']."</option>"; ?></td>
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