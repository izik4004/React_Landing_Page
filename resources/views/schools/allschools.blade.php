@include('layouts.header')

       <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index3.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index4.html" class="nav-link"><i class="fas fa-angle-right"></i>Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index5.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Teachers</a>
                                </li>
                            </ul>
                        </li>
                      
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Schools</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                   <a href="{{ route('school.index') }}" class="nav-link sub-group-active"><i class="fas fa-angle-right"></i>All
                                        Schools</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a href="{{ route('school.create') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        School</a>
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
                                    <a href="{{ route('teachers.create') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Teacher</a>
                                </li>
                               
                            </ul>
                        </li>
                        
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu ">
                                <li class="nav-item">
                                    <a href="{{ route('students.index') }}" class="nav-link menu-active"><i class="fas fa-angle-right"></i>All
                                        Students</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a href="{{ route('students.create') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Admission Form</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a href="account-settings.html" class="nav-link"><i
                                    class="flaticon-settings"></i><span>Account</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Schools</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Schools</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Schools Data</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Roll ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Class ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">Roll</label>
                                            </div>
                                        </th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Parents</th>
                                        <th>Address</th>
                                        <th>Date Of Birth</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0021</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0022</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0023</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student4.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0024</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0025</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0026</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student7.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0027</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student8.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0028</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student9.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0029</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student10.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0030</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0021</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0022</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0023</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student4.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0024</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0025</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0026</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student7.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0027</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student8.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0028</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student9.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0029</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student10.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0030</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0021</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0022</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0023</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student4.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0024</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0025</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0026</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student7.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0027</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student8.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0028</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student9.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0029</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student10.png" alt="student"></td>
                                        <td>Mark Willy</td>
                                        <td>Male</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Jack Sparrow </td>
                                        <td>TA-107 Newyork</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0030</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Maria Jamans</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>02/05/2001</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                            href="#">PsdBosS</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

</html>