<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Product example · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .blog-header-logo {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif
                /*rtl:Amiri, Georgia, "Times New Roman", serif*/
            ;
            font-size: 2.25rem;
        }


        /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
        #footer {
            background: #eeeeee;
            padding: 0 0 30px 0;
            color: #555555;
            font-size: 14px;
        }

        #footer .footer-top {
            background: #f6f6f6;
            padding: 60px 0 30px 0;
        }

        #footer .footer-top .footer-info {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-info h3 {
            font-size: 24px;
            margin: 0 0 20px 0;
            padding: 2px 0 2px 0;
            line-height: 1;
            font-weight: 700;
        }

        #footer .footer-top .footer-info p {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            font-family: "Roboto", sans-serif;
        }

        #footer .footer-top .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #3fbbc0;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 4px;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }

        #footer .footer-top .social-links a:hover {
            background: #65c9cd;
            text-decoration: none;
        }

        #footer .footer-top h4 {
            font-size: 16px;
            font-weight: 600;
            position: relative;
            padding-bottom: 12px;
        }

        #footer .footer-top .footer-links {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #footer .footer-top .footer-links ul i {
            padding-right: 2px;
            color: #3fbbc0;
            font-size: 18px;
            line-height: 1;
        }

        #footer .footer-top .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        #footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }

        #footer .footer-top .footer-links ul a {
            color: #555555;
            transition: 0.3s;
            display: inline-block;
            line-height: 1;
        }

        #footer .footer-top .footer-links ul a:hover {
            color: #3fbbc0;
        }

        #footer .footer-top .footer-newsletter form {
            margin-top: 30px;
            background: #fff;
            padding: 6px 10px;
            position: relative;
            border: 1px solid #d5d5d5;
            border-radius: 4px;
        }

        #footer .footer-top .footer-newsletter form input[type=email] {
            border: 0;
            padding: 4px;
            width: calc(100% - 110px);
        }

        #footer .footer-top .footer-newsletter form input[type=submit] {
            position: absolute;
            top: -1px;
            right: -1px;
            bottom: -1px;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 20px;
            background: #3fbbc0;
            color: #fff;
            transition: 0.3s;
            border-radius: 0 4px 4px 0;
        }

        #footer .footer-top .footer-newsletter form input[type=submit]:hover {
            background: #65c9cd;
        }

        #footer .copyright {
            text-align: center;
            padding-top: 30px;
        }

        #footer .credits {
            padding-top: 10px;
            text-align: center;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#"><img style="max-width: 150px;" alt="popo" src="<?= base_url('assets/images/logo.png') ?>" /></a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                </div>
            </div>
        </header>
    </div>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="fw-bold py-3 text-capitalize">
                        <span style="background-color: #3fbbc0;" class="badge ">Rapid Test Covid 19</span>
                    </h3>
                </div>
            </div>
            <div class="row py-2 d-flex justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="row p-2">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Pacient Name</th>
                                    <td><?= $test['name'] . ' ' . $test['surname'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Birthday</th>
                                    <td><?= $test['birthday'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Passport No.</th>
                                    <td><?= $test['personal_nr'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Serial Nr</th>
                                    <td><?= $test['test_unique_nr'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Test Date</th>
                                    <td><?= $test['test_date'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Added At</th>
                                    <td><?= $test['added_at'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Result</th>
                                    <td><?= boolval($test['test_results']) ? 'Positive' : 'Negative' ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-6">
                        <div class="footer-info">
                            <h3>Mio Laborator</h3>
                            <p>
                                Adresa R Partizani ,L 13 <br>
                                Korce, Albania<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                © Copyright <strong><span>Mio Laborator</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a>Hello Studio</a>
            </div>
        </div>
    </footer>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>