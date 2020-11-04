<?php
session_start();
$email = $_SESSION["admin"];
print_r($email);
if ( ($email == "") || ($email == null) ) {
    header('Location: ../views/index.php');
}
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../views/index.php">
                            <img src="../../upload/logo.jpg" alt="OSM" style="width :180px;" />
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
                            <a href="../views/home_page.php">
                                <i class="zmdi zmdi-balance"></i>Trang Chủ </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-account-o"></i>Quản Lý khách hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/Customer/list_customer.php">Danh Sách Khách Hàng</a>
                                </li>
                               


                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-shopping-cart"></i>quản lý Đơn Hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/Order/list_order.php">Danh Sách Đơn Hàng</a>
                                </li>
                            

                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-smartphone"></i>Quản Lý Sản phẩm</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/Product/list_of_products.php">Danh Sách Sản phẩm</a>
                                </li>
                            
                                <li>
                                    <a href="../views/Product/add_product.php">Thêm sản phẩm</a>
                                </li>


                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Danh Mục</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/Category/manageCategory.php">Danh Sách Danh Mục</a>
                                </li>
                                <li>
                                    <a href="../views/Category/addCategory.php">Thêm Danh Mục</a>
                                </li>


                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Tin Tức</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/News/manageNews.php">Danh Sách Tin Tức</a>
                                </li>
                                <li>
                                    <a href="../views/News/addNews.php">Thêm Tin Tức</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Giao Hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/Logistics/manageLogistics.php">Danh Sách Đơn Vị Giao Hàng</a>
                                </li>
                                <li>
                                    <a href="../views/Logistics/addLogistics.php">Thêm Đơn Vị Giao Hàng</a>
                                </li>
                            </ul>
                        </li>


                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Các trang</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="../views/Login.php">Đăng Nhập</a>
                                </li>
                                <li>
                                    <a href="../views/logout.php.php">Đăng Xuất</a>
                                </li>

                                <li>
                                    <a href="../views/orget-pass.php">Forget Password</a>
                                </li>
                            </ul>
                        </li> -->


                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo ">
                <a href="../views/home_page.php">
                    <img src="../../upload/logo.jpg" alt="OSM" style="width :180px;" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">


                        <li>
                            <a href="../views/home_page.php">
                                <i class="zmdi zmdi-balance"></i>Trang Chủ </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-account-o"></i>Quản Lý khách hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/Customer/list_customer.php">Danh Sách Khách Hàng</a>
                                </li>
                            


                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-shopping-cart"></i>quản lý Đơn Hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/Order/list_order.php">Danh Sách Đơn Hàng</a>
                                </li>
                               


                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-smartphone"></i>Quản Lý Sản phẩm</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/Product/list_of_products.php">Danh Sách Sản phẩm</a>
                                </li>
                               
                                <li>
                                    <a href="../views/Product/add_product.php">Thêm sản phẩm</a>
                                </li>


                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Danh Mục</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/Category/manageCategory.php">Danh Sách Danh Mục</a>
                                </li>
                                <li>
                                    <a href="../views/Category/addCategory.php">Thêm Danh Mục</a>
                                </li>


                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Tin Tức</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/News/manageNews.php">Danh Sách Tin Tức</a>
                                </li>
                                <li>
                                    <a href="../views/News/addNews.php">Thêm Tin Tức</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-shopping-cart"></i>Quản Lý Giao Hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../views/Logistics/manageLogistics.php">Danh Sách Đơn Vị Giao Hàng</a>
                                </li>
                                <li>
                                    <a href="../views/Logistics/addLogistics.php">Thêm Đơn Vị Giao Hàng</a>
                                </li>
                            </ul>
                        </li>

<!-- 
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Các trang</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="../views/index.php">Đăng Nhập</a>
                                </li>
                                <li>
                                    <a href="../views/logout.php">Đăng Xuất</a>
                                </li>

                                <li>
                                    <a href="../views/orget-pass.php">Forget Password</a>
                                </li>
                            </ul>
                        </li> -->

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
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            </form>
                            <div class="header-button">
                             
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">

                                            <?php

                                session_start();
                                if (isset($_SESSION["admin"])) {
                                    echo $_SESSION["admin"];
                                } else {
                                    echo '<li><a href="login_form.php">Đăng nhập</a></li>';
                                }
                                ?></a></li>

                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="account-dropdown__footer">
                                                    <a href="../views/logout.php">
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