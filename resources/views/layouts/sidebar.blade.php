<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
       <li class="nav-item">
        <a href='{{ asset("/") }}' class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Home
          </p>
        </a>
      </li>

       <li class="nav-item">
        <a href='{{ asset("admin/category") }}' class="nav-link">
          <i class="nav-icon fas fa-bars"></i>
          <p>
            Categories
          </p>
        </a>
      </li>
      
      <li class="nav-item">
        <a href='{{ asset("admin/attendance") }}' class="nav-link">
          <i class="nav-icon fas fa-star"></i>
          <p>
            Attendance
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href='{{ asset("admin/missing-item-status") }}' class="nav-link">
          <i class="nav-icon fas fa-eye"></i>
          <p>
            Missing Item Status
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href='{{ asset("admin/reservation") }}' class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Reservation
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href='{{ asset("admin/reservation-status") }}' class="nav-link">
          <i class="nav-icon fas fa-eye"></i>
          <p>
            Reservation Status
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href='{{ asset("admin/schedule") }}' class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>
            Schedule
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href='{{ asset("admin/user-role") }}' class="nav-link">
          <i class="nav-icon fas fa-user"></i>
          <p>
            User Role
          </p>
        </a>
      </li>

</ul>