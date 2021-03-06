<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php echo e(config('app.name', 'Library Management System')); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>"> <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?> "> <!-- Custom stlylesheet -->
</head>

<body>
    <div id="header">
        <!-- HEADER -->
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="logo">
                        <a href="#"><img src="<?php echo e(asset('images/library.png')); ?>"></a>
                    </div>
                </div>
                <div class="offset-md-2 col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            
                            
                        </div>
     
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /HEADER -->
    <div id="menubar">
        <!-- Menu Bar -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu">
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">Authors</a></li>
                        <li><a href="">Publishers</a></li>
                        <li><a href="">Categories</a></li>
                        <li><a href="">Books</a></li>
                        <li><a href="">Reg Students</a></li>
                        <li><a href="">Book Issue</a></li>
                        <li><a href="">Reports</a></li>
                        <li><a href="">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- /Menu Bar -->

    <!--<?php echo $__env->yieldContent('content'); ?>-->

    <!-- FOOTER -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>?? Copyright Devoloped By- <a href="https://github.com/maharshi-niloy">Maharshi Niloy ????</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /FOOTER -->
    <script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\My PC\Documents\Laravel Project\Library-Management-System\resources\views/app.blade.php ENDPATH**/ ?>