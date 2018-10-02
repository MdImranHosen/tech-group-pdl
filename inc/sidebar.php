  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image">
          <a href="#" onclick="onclickLogo();">
            <h2 align="center"><strong><span style="color: green;">প্রাইভেট </span><br>
                  <span style="color: red;">ডিটেকটিভ </span><br>
                  <span style="color: green;"> লিমিটেড</span></strong>
            </h2>
          </a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu sidebar_menu_style" data-widget="tree">
        <?php

         $path = $_SERVER['SCRIPT_FILENAME'];
         $currentpage = basename($path, '.php');
        
        ?>
        <li class="header"><hr></li>
        <?php
          $signin_client = SignSession::get('signin');
           if ($signin_client == true) { ?>
        ?>
        <li <?php if ($currentpage == 'profile') {
           echo 'class="active"';
          } ?>>
          <a href="profile.php">
            <i class="fa fa-user-o"></i><span> Profile </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
            <span> Info From </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i>Reporter From</a></li>
            <li><a href="#"><i class="fa fa-th-list"></i>Crime Report</a></li>
          </ul>
        </li>
        <?php }else{ ?>
          <li <?php if ($currentpage == 'registration') {
           echo 'class="active"';
          } ?> >
          <a href="registration.php">
            <i class="fa fa-registered" aria-hidden="true"></i><span> Registration </span>
          </a>
        </li>
        <?php } ?>
        <li <?php if ($currentpage == 'notice') {
           echo 'class="active"';
          } ?>>
          <a href="notice.php">
            <i class="fa fa-bell"></i><span> নোটিশ </span>
          </a>
        </li>
        <li <?php if ($currentpage == 'services') {
          echo 'class="active"';
        } ?>>
          <a href="services.php">
            <i class="fa fa-wrench"></i><span> সেবাসমূহ</span>
          </a>
        </li>
        
        <!-- <li class="application_menu_style"> -->
         <li <?php if ($currentpage == 'apply-from') {
          echo 'class="active"';
        } ?>>
          <a href="apply-from">
            <i class="fa fa-drivers-license-o"></i><span> আবেদন ফরম</span>
          </a>
        </li>
        <li <?php if ($currentpage == 'Contact') {
         echo 'class="active"';
        } ?>>
          <a href="Contact">
            <i class="fa fa-tree"></i><span> Contact Us</span>
          </a>
        </li>

        <li <?php if ($currentpage == 'detective-times') {
          echo 'class="active"';
        } ?>>
          <a href="detective-times.php">
            <img src="upload/pte.png"><span> গোয়েন্দার ১০ টি গুন </span>
          </a>
        </li>

        <li>
             <a href="https://www.pdnewsbd.com" target="_blank">
              <i class="fa fa-globe"></i><span> Online News</span>
             </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>