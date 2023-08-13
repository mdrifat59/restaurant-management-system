<aside class="left-sidebar sidebar-dark" id="left-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
      <a href="/index.html">
        <img src="{{asset('images/logo.png')}}" alt="Mono">
        <span class="brand-name">MONO</span>
      </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-left" data-simplebar style="height: 100%;">
      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">
        

        
          <li
           class="active"
           >
            <a class="sidenav-item-link" href="index.html">
              <i class="mdi mdi-briefcase-account-outline"></i>
              <span class="nav-text">Admin Dashboard</span>
            </a>
          </li>
        

        

        
          
          <li class="section-title">
            Options
          </li>
          
          
          
          <li
           >
            <a class="sidenav-item-link" href="{{route('roles.index')}}">
              <i class="mdi mdi-chart-line"></i>
              <span class="nav-text">Role</span>
            </a>
          </li>
        
        

        

        
          <li
           >
            <a class="sidenav-item-link" href="{{route('categorys.index')}}">
              <i class="mdi mdi-wechat"></i>
              <span class="nav-text">Categorys</span>
            </a>
          </li>


          
          <li
          >
          <a class="sidenav-item-link" href="{{route('subcategorys.index')}}">
            <i class="mdi mdi-phone"></i>
            <span class="nav-text">SubCategory</span>
          </a>
        </li>
          
          
          
          
        <li
         >
          <a class="sidenav-item-link" href="{{route('foods.index')}}">
            <i class="mdi mdi-account-group"></i>
            <span class="nav-text">Food</span>
          </a>
        </li>
        

        

        
          <li
           >
            <a class="sidenav-item-link" href="team.html">
              <i class="mdi mdi-account-group"></i>
              <span class="nav-text">Book a Table</span>
            </a>
          </li>
        

        

        
          <li
           >
            <a class="sidenav-item-link" href="calendar.html">
              <i class="mdi mdi-calendar-check"></i>
              <span class="nav-text">Review</span>
            </a>
          </li>
         
      </ul>

    </div>

    <div class="sidebar-footer">
      <div class="sidebar-footer-content">
        <ul class="d-flex">
          <li>
            <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
          <li>
            <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</aside>
