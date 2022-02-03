<div class="dashboard-page-one">
    <!-- Sidebar Area Start Here -->
    <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
       <div class="mobile-sidebar-header d-md-none">
            <div class="header-logo">
                <a href="#"><img src="img/logo1.png" alt="logo"></a>
            </div>
       </div>
        <div class="sidebar-menu-content">
            <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Students</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>Schools</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Teachers</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Schools</span></a>
                    <ul class="nav sub-group-menu sub-group-active">
                        <li class="nav-item">
                           <a href="{{ route('school.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                School</a>
                        </li>
                     
                        <li class="nav-item">
                            <a href="{{ route('school.create') }}" class="nav-link menu-active"><i class="fas fa-angle-right"></i>Registration
                            Form </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="{{ route('teachers.index') }}"  class="nav-link"><i class="fas fa-angle-right"></i>All
                                Teachers</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('teachers.create') }}"  class="nav-link"><i class="fas fa-angle-right"></i>Add
                                Teacher</a>
                        </li>
                       
                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Student</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="{{ route('students.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Student</a>
                        </li>
                       
                        <li class="nav-item">
                            <a href="{{ route('students.create') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                Student</a>
                        </li>
                    </ul>
                
                <li class="nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-settings"></i><span>Account</span></a>
                </li>
            </ul>
        </div>
    </div>