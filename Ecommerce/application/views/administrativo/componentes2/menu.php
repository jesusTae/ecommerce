    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo">
        <img src="<?php echo base_url('asset/administrativo/img/global.png')?>" class="img-thumbnail" width="80">
      </a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?php echo base_url('asset/administrativo/img/ui-zac.jpg')?>"></span>
                 
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?php echo base_url('asset/administrativo/img/ui-divya.jpg')?>"></span>
                  
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?php echo base_url('asset/administrativo/img/ui-danro.jpg')?>"></span>
                
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?php echo base_url('asset/administrativo/img/ui-sherman.jpg')?>"></span>
                  
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a class="dropdown-toggle" href="<?php echo site_url('administrativo/ControladorUsuarios/pass');?>">
              <i class="fa fa-unlock-alt"></i> Cambiar Contraseña
            </a>
          </li>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo site_url('Login/logout');?>">Cerrar sesion</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?php echo base_url('asset/administrativo/img/ui-sam.jpg')?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $this->session->userdata('nombre_usuario');?></h5>
          <li class="mt">
            <a href="<?php echo site_url('Page');?>">
              <i class="fa fa-dashboard"></i>
              <span>Principal</span>
              </a>
          </li>
          <li>
            <a href="<?php echo site_url('administrativo/ControladorSincronizar');?>">
              <i class="fa fa-refresh"></i>
              <span>Sincronizar articulos</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-list"></i>
              <span>Inventario</span>
            </a>
            <ul class="sub">
              <li><a href="<?php echo site_url('administrativo/ControladorCategorias');?>">Categoria</a></li>
              <li><a href="<?php echo site_url('administrativo/ControladorArticulos');?>">Articulos</a></li>
              <li><a href="<?php echo site_url('administrativo/ControladorPedidos');?>">Pedidos</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-list"></i>
              <span>Promociones</span>
            </a>
            <ul class="sub">
              <li><a href="<?php echo site_url('administrativo/ControladorPromociones');?>">Promociones</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo site_url('administrativo/ControladorUsuarios');?>">
              <i class="fa fa-user-circle-o"></i>
              <span>Usuarios </span>
              </a>
          </li>
          <li>
            <a href="<?php echo site_url('administrativo/ControladorUsuarios/pass');?>">
              <i class="fa fa-unlock-alt"></i>
              <span>Cambiar Contraseña </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
 