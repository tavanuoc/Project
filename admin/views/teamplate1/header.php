<?php
session_start();
$email = $_SESSION["admin"];
print_r($email);
if ( ($email == "") || ($email == null) ) {
    header('Location: ../index.php');
}
?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../index.php">
                            <img src="../../../upload/logo.jpg" alt="OSM" style = "width :100px;" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                    
                              
                    <li>
                            <a href="../home_page.php">
                                <i class="zmdi zmdi-balance"></i>Trang Chủ </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-account-o"></i>Quản Lý khách hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../Customer/list_customer.php">Danh Sách Khách Hàng</a>
                                </li>
                                <li>
                                    <a href="../Customer/edit_customer.php">Cập nhật</a>
                                </li>
                               
                                
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-shopping-cart"></i>quản lý Đơn Hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../Order/list_order.php">Danh Sách  Đơn Hàng</a>
                                </li>
                                <li>
                                    <a href="../Order/edit_order.php">Cập nhật</a>
                                </li>
                               
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-smartphone"></i>Quản Lý Sản phẩm</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../Product/list_of_products.php">Danh Sách Sản phẩm</a>
                                </li>
                                <li>
                                    <a href="../Product/edit_product.php">Cập nhật</a>
                                </li>
                                <li>
                                    <a href="../Product/add_product.php">Thêm sản phẩm</a>
                                </li>
                               
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Danh Mục</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../Category/manageCategory.php">Danh Sách  Danh Mục</a>
                                </li>
                                <li>
                                    <a href="../Category/addCategory.php">Thêm Danh Mục</a>
                                </li>
                               
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Tin Tức</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../News/manageNews.php">Danh Sách Tin Tức</a>
                                </li>
                                <li>
                                    <a href="../News/addNews.php">Thêm Tin Tức</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Giao Hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../Logistics/manageLogistics.php">Danh Sách Đơn Vị Giao Hàng</a>
                                </li>
                                <li>
                                    <a href="../Logistics/addLogistics.php">Thêm Đơn Vị Giao Hàng</a>
                                </li>
                            </ul>
                        </li>
                     
                      
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="../Login.php">Đăng Nhập</a>
                                </li>
                                <li>
                                    <a href="../logout.php.php">Đăng Xuất</a>
                                </li>
                            
                                <li>
                                    <a href="../orget-pass.php">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="../home_page.php">
                    <img  src="../../../upload/logo.jpg" alt="OSM" style = "width :100px;" >
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                 
                          
                    <li>
                            <a href="../home_page.php">
                                <i class="zmdi zmdi-balance"></i>Trang Chủ </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-account-o"></i>Quản Lý khách hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../Customer/list_customer.php">Danh Sách Khách Hàng</a>
                                </li>
                                <li>
                                    <a href="../Customer/edit_customer.php">Cập nhật</a>
                                </li>
                               
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-shopping-cart"></i>quản lý Đơn Hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../Order/list_order.php">Danh Sách  Đơn Hàng</a>
                                </li>
                                <li>
                                    <a href="../Order/edit_order.php">Cập nhật</a>
                                </li>
                               
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-smartphone"></i>Quản Lý Sản phẩm</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../Product/list_of_products.php">Danh Sách Sản phẩm</a>
                                </li>
                                <li>
                                    <a href="../Product/edit_product.php">Cập nhật</a>
                                </li>
                                <li>
                                    <a href="../Product/add_product.php">Thêm sản phẩm</a>
                                </li>
                               
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Danh Mục</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../Category/manageCategory.php">Danh Sách  Danh Mục</a>
                                </li>
                                <li>
                                    <a href="../Category/addCategory.php">Thêm Danh Mục</a>
                                </li>
                               
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Tin Tức</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../News/manageNews.php">Danh Sách Tin Tức</a>
                                </li>
                                <li>
                                    <a href="../News/addNews.php">Thêm Tin Tức</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Giao Hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../Logistics/manageLogistics.php">Danh Sách Đơn Vị Giao Hàng</a>
                                </li>
                                <li>
                                    <a href="../Logistics/addLogistics.php">Thêm Đơn Vị Giao Hàng</a>
                                </li>
                            </ul>
                        </li>
                      
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="../index.php">Đăng Nhập</a>
                                </li>
                                <li>
                                    <a href="../logout.php">Đăng Xuất</a>
                                </li>
                            
                                <li>
                                    <a href="../orget-pass.php">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="../../lib/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                            
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                          
                                            <div class="account-dropdown__footer">
                                                <a href="../logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

    </div>
</body>



