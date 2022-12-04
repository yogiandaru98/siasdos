<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="/stisla/dist/assets/css/style.css">
    <link rel="stylesheet" href="/stisla/dist/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>

                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="/stisla/dist/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/">SIASDOS</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">ASDOS</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">MENU</li>
                        <li class="dropdown">
                        <li class="active">
                            <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>

                        </li>
                        <li class="active">
                            <a href="#" class="nav-link"><i class="fas fa-columns"></i><span>Data Pendaftar</span></a>

                        </li>
                        <li class="active">
                            <a href="#" class="nav-link"><i class="far fa-file-alt"></i><span>Pengumuman</span></a>

                        </li>
                        <li class="active">
                            <a href="#" class="nav-link"><i class="fa fa-book"></i><span>Mata Kuliah</span></a>

                        </li>
                        <li class="active">
                            <a href="#" class="nav-link"><i class="fas fa-columns"></i><span>Pendaftaran</span></a>
                        </li>

                        <li class="active">
                            <a href="#" class="nav-link"><i class="far fa-file-alt"></i><span>Pengumuman Asdos</span></a>

                        </li>

                        </li>

                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>$title</h1>
                    </div>

                    <div class="section-body">
                        <?= $this->renderSection('content') ?>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> SIASDOS</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="/stisla/dist/assets/modules/jquery.min.js"></script>
    <script src="/stisla/dist/assets/modules/popper.js"></script>
    <script src="/stisla/dist/assets/modules/tooltip.js"></script>
    <script src="/stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="/stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="/stisla/dist/assets/modules/moment.min.js"></script>
    <script src="/stisla/dist/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="/stisla/dist/assets/js/scripts.js"></script>
    <script src="/stisla/dist/assets/js/custom.js"></script>
</body>

</html>