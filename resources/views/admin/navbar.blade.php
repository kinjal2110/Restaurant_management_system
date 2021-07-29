<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
         
          <li class="nav-item">
            <a class="nav-link" href="{{url('/users')}}">
            <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
            <i class="typcn typcn-group menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#food-basic" aria-expanded="false" aria-controls="food-basic">
              <i class="typcn typcn-wine menu-icon"></i>
              <span class="menu-title">FoodMenu</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="food-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/foodmenu')}}">Insert Food</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/displayfood')}}">Display Food</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link"  data-toggle="collapse" href="#chef-basic" aria-expanded="false" aria-controls="chef-basic">
              <i class="typcn typcn-mortar-board menu-icon"></i>
              <span class="menu-title">Chefs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="chef-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/viewchef')}}">Insert Chef</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/displaychef')}}">Display Chef</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{url('/viewreservation')}}" >
              <i class="typcn typcn-tags menu-icon"></i>
              <span class="menu-title">Reservation</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link"  href="{{url('/orders')}}" >
              <i class="typcn typcn-gift menu-icon"></i>
              <span class="menu-title">Orders</span>
            </a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="typcn typcn-user-add-outline menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="typcn typcn-globe-outline menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
        
        </ul>
      </nav>
   