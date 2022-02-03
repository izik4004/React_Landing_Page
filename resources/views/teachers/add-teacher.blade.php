@include('layouts.header')

<body>
    <!-- Preloader Start Here -->

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
                                    <a href="index3.html" class="nav-link"><i class="fas fa-angle-right"></i>Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index4.html" class="nav-link"><i class="fas fa-angle-right"></i>Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index5.html" class="nav-link"><i class="fas fa-angle-right"></i>Teachers</a>
                                </li>
                            </ul>
                        </li>

                        
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Schools</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                   <a href="{{ route('school.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        School</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a href="{{ route('school.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>Registration
                                    Form </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                    <a href="{{ route('teachers.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>All Teachers</a>
                                </li>
                              
                                <li class="nav-item">
                                    <a href="{{ route('teachers.create') }}" class="nav-link menu-active"><i class="fas fa-angle-right"></i>Add Teacher</a>
                                </li>
                              
                            </ul>
                        </li>

                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu ">
                                <li class="nav-item">
                                    <a href="{{ route('students.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>All Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('students.create') }}"class="nav-link"><i class="fas fa-angle-right"></i>Admission Form</a>
                                </li>
                            </ul>
                        </li>
         
                        <li class="nav-item">
                            <a href="account-settings.html" class="nav-link"><i class="flaticon-settings"></i><span>Account</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Add New Teacher</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Teacher</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="POST" action="{{ route('teachers.store') }}" enctype="multipart/form-data">
                            @include('inc.session-errors')
                            @include('inc.session-status')
                            @csrf
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Full Name *</label>
                                    <input type="text" placeholder="Full name" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Name of School *</label>
                                    <input type="text" placeholder="name of school" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2">
                                        <option value="">Please Select Gender *</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right' name="date_of_birth" required>
                                    <i class="far fa-calendar-alt"></i>
                                </div>

                                
                                <div class="form-group col-xl-3 col-lg-6 col-12 ">
                                    <label class="control-label">State of Origin</label>
                                    <select onchange="toggleLGA(this);" name="state" id="state" class="form-control">
                                        <option value="" selected="selected">- Select -</option>
                                        <option value="Abia">Abia</option>
                                        <option value="Adamawa">Adamawa</option>
                                        <option value="AkwaIbom">AkwaIbom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="Bayelsa">Bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross River">Cross River</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Ebonyi">Ebonyi</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Enugu">Enugu</option>
                                        <option value="FCT">FCT</option>
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="Jigawa">Jigawa</option>
                                        <option value="Kaduna">Kaduna</option>
                                        <option value="Kano">Kano</option>
                                        <option value="Katsina">Katsina</option>
                                        <option value="Kebbi">Kebbi</option>
                                        <option value="Kogi">Kogi</option>
                                        <option value="Kwara">Kwara</option>
                                        <option value="Lagos">Lagos</option>
                                        <option value="Nasarawa">Nasarawa</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Ogun">Ogun</option>
                                        <option value="Ondo">Ondo</option>
                                        <option value="Osun">Osun</option>
                                        <option value="Oyo">Oyo</option>
                                        <option value="Plateau">Plateau</option>
                                        <option value="Rivers">Rivers</option>
                                        <option value="Sokoto">Sokoto</option>
                                        <option value="Taraba">Taraba</option>
                                        <option value="Yobe">Yobe</option>
                                        <option value="Zamfara">Zamafara</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label class="control-label">LGA *</label>
                                    <select name="lga" id="lga" value="select" class="form-control select-lga" required></select>
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Home Town *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Residential Address</label>
                                    <input type="text" placeholder="Address" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Do you live within the school premises</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone Number *</label>
                                    <input type="tel" placeholder="phone number" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Next of Kin *</label>
                                    <input type="name" placeholder="Next of kin" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone Number of Next of Kin</label>
                                    <input type="tel" placeholder="phone number" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Highest Academic Qualiification</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Institution attended with date</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Subject area of specialisation</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Subject(s) taught:</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Year of first appointment *</label>
                                    <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                    data-position='bottom right' name="date_of_birth" required>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date of present appointment *</label>
                                    <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right' name="date_of_birth" required>
                                    <i class="far fa-calendar-alt"></i>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date of retirement *</label>
                                    <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                    data-position='bottom right' name="date_of_birth" required>
                                    <i class="far fa-calendar-alt"></i>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Years of experience *</label>
                                    <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                    data-position='bottom right' name="date_of_birth" required>
                                     <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Grade Level</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Rank</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Post held in school</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Year posted to school</label>
                                    <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right' name="date_of_birth" required>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Posting history with date</label>
                                    <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                    data-position='bottom right' name="date_of_birth" required>
                                     <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Date of retirement:</label>
                                    <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right' name="date_of_birth" required>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Type of staff *</label>
                                    <select class="select2">
                                        <option value="">Please Select  *</option>
                                        <option value="1">Temporary</option>
                                        <option value="2">PTA</option>
                                        <option value="3">N-Power</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                {{-- <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">School Logo (150px X 150px)</label>
                                    <input type="file" class="form-control-file">
                                </div> --}}
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">ansemiss</a> 2020. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
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

    
    <script src="js/lga.min.js"></script>
    <script src="js/lga.js"></script>
</body>

</html>