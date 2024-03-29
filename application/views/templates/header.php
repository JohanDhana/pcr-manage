<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png') ?>" sizes="32x32">
</head>

<body>
    <?php if ($this->session->userdata('logged_in')) : ?>
        <header class="navbar sticky-top navbar-light bg-light flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-dark text-white py-2" href="#"><img src="<?= base_url('assets/images/logo.png') ?>" style="width:170px; height: 45px;" /></a>
            <div class="dropdown admin-desktop">
                <a href="#" class="btn dropdown-toggle py-0" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong><?= $this->session->userdata('username'); ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="<?= base_url('users/reset-password'); ?>">Reset Password</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('users/logout'); ?>">Logout</a></li>
                </ul>
            </div>
            <button class="navbar-toggler position-absolute d-md-none collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </header>
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse bg-dark">
                    <div class="sidebar-menu">
                        <div class="position-sticky pt-3">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link text-secondary active" aria-current="page" href="<?= base_url('tests/list'); ?>">
                                        <span data-feather="home"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="<?php echo base_url() . 'tests/list' ?>">
                                        <span data-feather="file"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16" style="margin-right: 4px;">
                                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                        Tests
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="<?= base_url('tests/create'); ?>">
                                        <span data-feather="shopping-cart"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-plus" viewBox="0 0 16 16" style="margin-right: 4px">
                                            <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg>
                                        Add tests
                                    </a>
                                </li>
                            </ul>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        </div>
                        <div class="pb-4">
                            <hr style="color: #fff">
                            <div class="dropdown admin-dropdown">
                                <a href="#" class="btn dropdown-toggle py-0" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <!-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> -->
                                    <strong class="text-white"><?= $this->session->userdata('username'); ?></strong>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?= base_url('users/logout'); ?>">Logout</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item" href="#">Another action</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 position-relative">
            <?php endif; ?>
            <div class="container-fluid">
                <!-- Flash messages -->
                <div class="col-md-10 offset-md-1">
                    <?php if ($this->session->flashdata('created')) : ?>
                        <?php echo '<p class="alert alert-success position-absolute font-weight-bold flash-alert">' . $this->session->flashdata('created') . ' <button class="btn p-0 pb-1" id="closeAlert"><i class="bi bi-x-circle"></i></button></p>'; ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('bad_request')) : ?>
                        <?php echo '<p class="alert alert-danger position-absolute flash-alert">' . $this->session->flashdata('bad_request') . '<button class="btn p-0 pb-1" id="closeAlert"><i class="bi bi-x-circle"></i></button></p>'; ?>
                    <?php endif; ?>
                </div>