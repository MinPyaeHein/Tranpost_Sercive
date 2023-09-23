<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('storage/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">CO Car Transport</span>
  </a>
  @php
  $user = auth()->user();
  @endphp
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('storage/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Thu Yein</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @php
        $menuService = [
         
         
          [  
            'prefix'=> 'serviceCars',
            'route' => 'serviceCars.index',
            'title' => 'Service Car',
          ],

          [  
            'prefix'=> 'serviceCarCreate',
            'route' => 'serviceCarCreate.create',
            'title' => 'Car Register',
          ],
          [  
            'prefix'=> 'serviceCarDrivers',
            'route' => 'serviceCarDrivers.index',
            'title' => 'Service Car Driver',
        ],
        [  
            'prefix'=> 'serviceCarDriverCreate',
            'route' => 'serviceCarDriverCreate',
            'title' => 'Driver Register',
          ],
         
        ];
        $menuCustomer = [
          [ 
            'prefix'=> 'customers',
            'route' => 'customers.index',
            'title' => 'Customers',
          ],
          [ 
            'prefix'=> 'customerOrder',
            'route' => 'customerOrder.index',
            'title' => 'Active Orders',
          ],
          [ 
            'prefix'=> 'customerHistory',
            'route' => 'customerHistory.index',
            'title' => 'Orders History',
          ],
          [ 
            'prefix'=> 'customerPayment',
            'route' => 'customerPayment.index',
            'title' => 'Outstanding List',
      ],
          [ 
            'prefix'=> 'customerPaid',
            'route' => 'customerPaid.index',
            'title' => 'Paid Customer',
          ]
          
         
         
         
        ];
        $menuAdmin = [
          [ 
            'prefix'=> 'admins',
            'route' => 'admins.index',
            'title' => 'Admins',
          ],
          [ 
            'prefix'=> 'adminRoles',
            'route' => 'adminRoles.roles',
            'title' => 'Admin Roles',
          ],
          [ 
            'prefix'=> 'adminCreate',
            'route' => 'admin.create',
            'title' => 'Admin Register',
          ],        
        ];
        @endphp

        
           
        <li class="nav-item  info{{ Request::is('service*') ? ' menu-open' : '' }}">
          <a href="#" class="nav-link{{ Request::is('service*') ? ' active' : '' }}">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Service Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @foreach ($menuService as $menuItem)
            <li class="nav-item">                                        
              <a href="{{ route($menuItem['route']) }}" class="nav-link {{ Request::is($menuItem['prefix'].'*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>{{$menuItem['title']}}</p>
              </a>
            </li>
            @endforeach
          </ul>
        </li>

        <li class="nav-item  info{{ Request::is('customer*') ? ' menu-open' : '' }}">
          <a href="#" class="nav-link{{ Request::is('customer*') ? ' active' : '' }}">
            <i class="nav-icon fas fa-edit"></i>
            <p>
             Customer Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @foreach ($menuCustomer as $menuItem)
            <li class="nav-item">                                        
              <a href="{{ route($menuItem['route']) }}" class="nav-link {{ Request::is($menuItem['prefix'].'*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>{{$menuItem['title']}}</p>
              </a>
            </li>
            @endforeach
          </ul>
        </li>
      

        <li class="nav-item  info{{ Request::is('admin*') ? ' menu-open' : '' }}">
          <a href="#" class="nav-link{{ Request::is('admin*') ? ' active' : '' }}">
            <i class="nav-icon fas fa-edit"></i>
            <p>
             Admin Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @foreach ($menuAdmin as $menuItem)
            <li class="nav-item">                                        
              <a href="{{ route($menuItem['route']) }}" class="nav-link {{ Request::is($menuItem['prefix'].'*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>{{$menuItem['title']}}</p>
              </a>
            </li>
            @endforeach
          </ul>
        </li>     
      </ul>    
    </nav>
  </div>
</aside>
