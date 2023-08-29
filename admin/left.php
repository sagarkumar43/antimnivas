<?php
 //session_start();

//  login Compulsary code
//  if(empty($_SESSION["email"]))
//  {
//   echo"<script>window.location.href = 'index.php'</script>";
//  }

?>
<aside class="sidebar-left">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse"
        aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="dashboard.php"><img src="images/logo1.png" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="sidebar-menu">
        <!-- <li class="header">MAIN DASHBOARD</li> -->
        <li class="treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="showtraffic.php">
            <i class="fa fa-area-chart"></i> <span>Show Traffic & Revenue</span>
          </a>
        </li>
        </li>
        <li class="treeview">
          <a href="user.php">
            <i class="fa fa-users"></i> <span>Manage Users</span>
          </a>
        </li>
        </li>
        
        <li class="treeview">
          <a href="heading.php">
            <i class="fa fa-header"></i> <span>Manage Heading</span>
          </a>
        </li>
       
        <li>
          <a href="packages.php">
            <i class="fa fa-tasks"></i> <span>Manage Packages</span>
          </a>
        </li>

        <li class="treeview">
          <a href="obituaries.php">
            <i class="fa fa-diamond"></i> <span>Manage Obituary</span>
          </a>
        </li>

        <li class="treeview">
          <a href="price.php">
            <i class="fa fa-inr"></i> <span>Manage Pricing</span>
          </a>
        </li>

        <li class="treeview">
          <a href="aboutus.php">
            <i class="fa fa-user"></i> <span>Manage About us</span>
          </a>
        </li>

        <li class="treeview">
          <a href="blog.php">
            <i class="fa fa-rss"></i> <span>Manage Blogs</span>
          </a>
        </li>

        <li class="treeview">
          <a href="enquiry.php">
            <i class="fa fa-th"></i> <span>Manage Enquiry</span>
          </a>
        </li>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
</aside>