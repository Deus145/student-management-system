<?php include_once('../view/first.php'); ?>
<?php include_once('../view/templates/header.php'); ?>
<?php include_once('../view/sidebar.php'); ?>
<?php include_once('../view/alert.php'); ?>
<?php include_once('../controller/config.php'); ?>

<?php 
  // if user is not logged in, they cannot access this page
  //if (empty($_SESSION['username'])){
    //header('location: login.php');
  //}
?>
<style>
  .form-control-feedback{
    pointer-events: auto;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">

                <p>Total Classrooms</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-people"></i>
              </div>
              <a href="<?php echo $link_address1;?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                

                <p>Total Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-people"></i>
              </div>
              <a href="<?php echo $link_address4;?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                

                <p>Total Courses</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-people"></i>
              </div>
              <a href="<?php echo $link_address2?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                

                <p>Total Lecturers</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-people"></i>
              </div>
              <a href="<?php echo $link_address3;?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /End of content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardMainMenu").addClass('active');
    });
  </script>

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

<?php include_once('../view/templates/footer.php'); ?>  