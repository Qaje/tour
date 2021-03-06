<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/uploads/avatar_admin/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->user()->name }} - {{ auth()->user()->job_title }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->
      
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ENLACES</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active">
          <a href="{{url('province')}}" method="get" method="GET">
            <i class="fa fa-hand-paper-o"></i> 
            <span>Provincias</span>
          </a>
        </li>
        <li class="active">
          <a href="{{url('patrimonialsite')}}" method="get"><i class="fa fa-get-pocket"></i> 
          <span>Patrimonios</span></a>
        </li>
        <li class="active">
          <a href="{{url('event')}}" method="get"><i class="fa fa-get-pocket"></i> 
          <span>Eventos</span></a>
        </li>

<!--         <li class="treeview">
            <a href="#"><i class="fa  fa-users"></i> <span>Gestion de Compañia</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" class="active">
                <li class="active">
                  <a href="{{url('turisticcompany')}}" method="get"><i class="fa fa-get-pocket"></i> 
                  <span>Compañias Turisticas</span></a>
                </li>
                <li class="active">
                  <a href="{{ url('office') }}" method="get"><i class="fa fa-get-pocket"></i> 
                  <span>Oficinas</span></a>
                </li>              
            </ul>
        </li> -->

        <li class="treeview">
            <a href="#"><i class="fa  fa-users"></i> <span>Gestion de Categoria</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" class="active">
                <li class="active">
                  <a href="{{url('category')}}" method="get"><i class="fa fa-get-pocket"></i> 
                  <span>Categorias de Servicios</span></a>
                </li>
                <!-- <li class="active">
                  <a href="{{url('turistictypecompany')}}" method="get"><i class="fa fa-get-pocket"></i> 
                  <span>Tipo de Compañia Turistica</span></a>
                </li>           -->    
            </ul>
        </li>

        <li class="treeview">
            <a href="#"><i class="fa  fa-users"></i> <span>Gestion de Usuarios</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" class="active">
              <li>
                <a href="{{url('user')}}" method="get"><i class="fa fa-unlock-alt"></i> <span>Usuarios</span></a></li>
              </li>
              <li>
                <a href="{{url('role')}}" method="get"><i class="fa fa-ticket"></i> <span>Roles</span></a></li>
              </li>
              <li>
                <a href="{{url('permission')}}" method="get"><i class="fa fa-thumbs-up"></i> <span>Permisos</span></a></li>
              </li>
            </ul>
          </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->