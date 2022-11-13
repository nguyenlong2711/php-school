   <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Quản Lý Sách</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Xem Sách</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?controller=home&action=thongke">Xem Thống Kê</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?controller=home&action=themsach">Thêm Sách</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?controller=home&action=themnxb">Thêm Nhà Xuất Bản</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?controller=home&action=themtacgia">Thêm Tác Giả</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?controller=home&action=themtheloai">Thêm Thể Loại</a>
                                    <a class="nav-link dropdown-toggle list-group-item list-group-item-action list-group-item-light p-3" id="navbarDropdown" href="" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản Lý Đơn Hàng</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item " href="index.php?controller=donhang&action=danggiao" >Đơn Hàng Đang Giao</a>
                                        <a class="dropdown-item" href="index.php?controller=donhang&action=dagiao">Đơn Hàng Đã Giao</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="index.php?controller=donhang&action=dahuy">Đơn Hàng Đã Huỷ</a>
                                    </div>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Danh Mục</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item nav-link"> Xin Chào <?php echo ($_SESSION['admin'])?></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tải Khoản</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item " href="#!" >Đổi Mật Khẩu</a>
                                        <a class="dropdown-item" href="index.php?controller=login&action=logout">Đăng Xuất</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>