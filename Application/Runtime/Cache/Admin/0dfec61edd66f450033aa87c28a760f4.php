<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>myshop</title>
    <link rel="stylesheet" href="<?php echo (ADMIN_PUBLIC); ?>/styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo (ADMIN_PUBLIC); ?>/styles/swiper.min.css">
    <link rel="stylesheet" href="<?php echo (ADMIN_PUBLIC); ?>/styles/login.css">
</head>

<body>
<!-- Swiper -->
<div class="header">
    mys<i class="iconfont">&#xe601;</i>op
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-7 col-md-7 col-lg-7">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(<?php echo (ADMIN_PUBLIC); ?>/images/img1.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php echo (ADMIN_PUBLIC); ?>/images/img2.png)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php echo (ADMIN_PUBLIC); ?>/images/img3.jpg"></div>
                    <div class="swiper-slide" style="background-image:url(<?php echo (ADMIN_PUBLIC); ?>/images/img4.jpg)"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>


        <div class="col-sm-5 col-md-5 col-lg-5 login">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <form class="form-horizontal" action="" method="post">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">账号：</label>
                                <div class="col-sm-8">
                                    <input type="username" name="username" class="form-control"  placeholder="请输入账号">
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">密码：</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password" class="form-control" placeholder="请输入密码">
                                </div>
                                <div class="col-sm-4"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="rememberMe"> 记住我
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-10">
                                    <button type="submit" class="btn btn-block btn-default">登录</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer text-center">
        <div>
            Copyright © 2016 imooc.com All Rights Reserved | 京ICP备 13046642号-2
        </div>
    </div>
</div>



<script src="<?php echo (ADMIN_PUBLIC); ?>/js/swiper.min.js"></script>
<script src="<?php echo (ADMIN_PUBLIC); ?>/js/login.js"></script>

</body>
</html>