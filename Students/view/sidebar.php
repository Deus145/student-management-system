<?php include_once('../view/first.php'); ?>
<?php include_once('../view/templates/header.php'); ?>
<?php include_once('../view/alert.php');?>
<?php include_once('../controller/config.php'); ?>



<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo $link_address5;?>">
            <i class="fa fa-dashboard"></i><span>Home</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo $link_address2;?>"">
            <i class="fa fa-files-o"></i>
            <span>Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $link_address2;?>"><i class="fa fa-circle-o"></i> Add course</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="<?php echo $link_address1;?>"">
            <i class="fa fa-files-o"></i>
            <span>Classrooms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $link_address1;?>"><i class="fa fa-circle-o"></i> Add classroom</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo $link_address4;?>"">
            <i class="fa fa-laptop"></i>
            <span>Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $link_address4;?>"><i class="fa fa-circle-o"></i> Add student</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo $link_address3;?>"">
            <i class="fa fa-edit"></i> <span>Lecturers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $link_address3;?>"><i class="fa fa-circle-o"></i> Add lecturer</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Results</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../view/docs/results.pdf"><i class="fa fa-circle-o"></i> show results</a></li>
            <li><a href="https://www.4icu.org/ug/"><i class="fa fa-circle-o"></i> University Rankings</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo $link_address6;?>">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
               <small class="label pull-right bg-yellow">2</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo $link_address7;?>">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active">
              <a href="<?php echo $link_address7;?>">Inbox
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">10</span>
                </span>
              </a>
            </li>
            <li><a href="<?php echo $link_address8;?>">Compose</a></li>
            <li><a href="<?php echo $link_address9;?>">Read</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>