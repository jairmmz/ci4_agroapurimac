<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title><?php echo $empresa['nombre_empresa'] ?></title>
    <!-- Favicon -->
    <link rel="icon" type="<?php echo base_url('') ?>/image/png" href="<?php echo base_url("") ?>/images/<?php echo $empresa['icono_empresa'] ?>">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/themify-icons.css">
    <!--jquery-ui-->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/jquery-ui.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>/style.css">
    <link rel="stylesheet" href="<?php echo base_url("") ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/responsive.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <!--COLOR CSS--->
    <link rel="stylesheet" href="<?php echo base_url('') ?>/css/color/color3.css">
    <link rel="stylesheet" href="#" id="colors">
</head>

<!-- Shop Login -->
<section class="shop login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="login-form">
                    <h2>Login</h2>
                    <p style="font-size: 17px; margin-bottom: -3px;">Por favor ingrese su correro y contraseña para acceder al sistema</p>
                    <!-- Form -->
                    <form class="form font-text" method="post" action="<?php echo base_url("login/validar") ?>">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Su correo electronico:<span>*</span></label>
                                    <input type="email" name="email" placeholder="" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Su Password:<span>*</span></label>
                                    <input type="password" name="password" placeholder="" required="required">
                                </div>
                            </div>
                            <div class="col-12 text-center font-tex">
                                <div class="form-group login-btn">
                                    <button class="btn" type="submit">Ingresar</button>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline" style="font-size: 17px;" for="2"><input name="news" id="2" type="checkbox">Recordar contraseña</label>
                                </div>
                                <a href="#" class="lost-pass font-tex" style="font-size: 17px;">Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Login -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    let mensaje = '<?php echo $mensaje; ?>'

    if (mensaje == '1') {
        Swal.fire({
            icon: 'success',
            title: 'bienvenido.',
            text: 'success'
        })
    }
    if (mensaje == 'nologin') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Contraseña o email incorrectos!'
        })
    }
</script>

<!-- Jquery OFICIAL-->
<script src="<?php echo base_url() ?>/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/js/jquery-migrate-3.0.0.js"></script>
<script src="<?php echo base_url() ?>/js/jquery-ui.min.js"></script>
<!-- Popper JS -->
<script src="<?php echo base_url() ?>/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
<!-- Color JS -->
<script src="<?php echo base_url() ?>/js/colors.js"></script>
<!-- Slicknav JS -->
<script src="<?php echo base_url() ?>/js/slicknav.min.js"></script>
<!-- Owl Carousel JS -->
<script src="<?php echo base_url() ?>/js/owl-carousel.js"></script>
<!-- Magnific Popup JS -->
<script src="<?php echo base_url() ?>/js/magnific-popup.js"></script>
<!-- Fancybox JS -->
<script src="<?php echo base_url() ?>/js/facnybox.min.js"></script>
<!-- Waypoints JS -->
<script src="<?php echo base_url() ?>/js/waypoints.min.js"></script>
<!-- Countdown JS -->
<script src="<?php echo base_url() ?>/js/finalcountdown.min.js"></script>
<!-- Nice Select JS -->
<script src="<?php echo base_url() ?>/js/nicesellect.js"></script>
<!-- Ytplayer JS -->
<script src="<?php echo base_url() ?>/js/ytplayer.min.js"></script>
<!-- Flex Slider JS -->
<script src="<?php echo base_url() ?>/js/flex-slider.js"></script>
<!-- ScrollUp JS -->
<script src="<?php echo base_url() ?>/js/scrollup.js"></script>
<!-- Onepage Nav JS -->
<script src="<?php echo base_url() ?>/js/onepage-nav.min.js"></script>
<!-- Easing JS -->
<script src="<?php echo base_url() ?>/js/easing.js"></script>
<!-- Active JS -->
<script src="<?php echo base_url() ?>/js/active.js"></script>



<!-- Flex Slider JS -->
<script src="<?php echo base_url() ?>/js/flex-slider.js"></script>
<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>
<script src="<?php echo base_url() ?>/js/gmap.min.js"></script>
<script src="<?php echo base_url() ?>/js/map-script.js"></script>
</body>

</html>