<!DOCTYPE html>

<html lang="vi">
<!-- Mirrored from php-huyvandnc.rhcloud.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2016 22:10:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ACCLMHT247</title>
    <meta content=
          "shop ban acc, acc game gia re, shop đột kích, shop cf, shop đột kích, shop dot kich, shop liên minh, shop lien minh, lien minh free, acc cf free, share acc cf"
          name="keywords">
    <meta content=
          "ACCLMHT247, chuyên bán các loại acc game giá rẻ, Mua acc game giá rẻ tại ACCLMHT247.com "
          name="description">
    <meta content=
          "ACCLMHT247, chuyên bán các loại acc game giá rẻ, Mua acc game giá rẻ tại ACCLMHT247.com "
          name="msvalidate.01">

    <meta content="1135903226465690" property="fb:app_id">

    <meta content="vi_VN" property="og:locale">
    <meta content="article" property="og:type">
    <?php if (!$not): ?>
        <meta content="<?= base_url() ?>acc?id=<?= $query[0]['id'] ?>" property="og:url">
        <meta content="Bán tài khoản <?= $query[0]['loainick'] ?> #<?= $query[0]['id'] ?> giá <?= number_format($query[0]['gia'], 0, '.', '.') ?>  vnđ"
              property="og:title">
        <meta content="<?php $image = explode("|", $query[0]['hinhanh']);
        echo $image[0]; ?>" property="og:image">
        <meta content="<?= $query[0]['noidung'] ?>" property="og:description">
    <?php endif; ?>
    <!-- Web fonts -->
    <link href=
          "http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"
          rel="stylesheet"><!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/oneui.min-2.2.css" rel="stylesheet">
    <link href="assets/js/slick/slick.min.css" rel="stylesheet">
    <link href="assets/js/slick/slick-theme.min.css" rel="stylesheet">
    <link href="assets/css/core.css" rel="stylesheet">
    <link href="assets/favicon.ico" rel="shortcut icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
</head>
<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=1135903226465690";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" class=
            "navbar-toggle collapsed" data-target="#navbar" data-toggle=
                    "collapse" type="button"><span class="sr-only">Toggle
                navigation</span> <span class="icon-bar"></span> <span class=
                                                                       "icon-bar"></span> <span class="icon-bar"></span>
            </button>
            <div class="animbrand">
                <a class="navbar-brand animate" href="index.php" title=
                "ACCLMHT247"><img alt="" src=
                    "assets/img/ckc.png"></a>
            </div>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a href=
                       "https://hdmuagameaclienminh24h.blogspot.com/"
                       target="_blank">Hướng dẫn mua acc game tại shop</a>
                </li>
                <li>
                    <a href=
                       "https://www.facebook.com/acclmht247"
                       target="_blank">Liên hệ chủ SHOP</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (@$user_profile):  // call var_dump($user_profile) to view all data ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            <img class="avatar hidden-xs"
                                 src="https://graph.facebook.com/<?= $user_profile['id'] ?>/picture?type=large"
                                 alt="Avatar"> Chào <strong><?= $user_profile['name'] ?></strong>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">
                                <i class="si si-wallet pull-right"></i><strong
                                        class="text-primary"><?= number_format($money, 0, '.', '.') ?> <sup
                                            class="text-muted">vnđ</sup></strong></li>
                            <?php if (isset($admin)): ?>
                                <li><a href="javascript:void(0);" id="view-profiles"><i
                                                class="fa fa-plus pull-right"></i>Đăng acc</a></li>
                            <?php endif; ?>
                            <li><a href="lichsu"><i class="si si-list pull-right"></i>Lịch sử Giao dịch</a></li>
                            <li><a href="<?= $logout_url ?>">
                                    <i class="si si-logout pull-right"></i>Thoát</a></li>
                        </ul>
                    </li>


                <?php else: ?>
                    <li>
                    <a href="<?= $login_url ?>"><span aria-hidden=
                                                      "true" class="fa fa-facebook-square"></span> Đăng nhập</a>
                    </li><?php endif; ?>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Thống kê</h3>
                </div>
                <div class="panel-body">
                    <div class="row items-push">
                        <div class="col-md-3">
                            <div class="text-muted">
                                <small><i class=
                                          "si si-game-controller"></i> LMHT</small>
                            </div>
                            <div class="font-w600">
                                    <span class="text-danger" data-to="<?= $lienminh ?>"
                                          data-toggle="countTo"></span> tài khoản
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-muted">
                                <small><i class=
                                          "si si-game-controller"></i> Đột
                                    Kích</small>
                            </div>
                            <div class="font-w600">
                                    <span class="text-danger" data-to="<?= $dotkich ?>"
                                          data-toggle="countTo"></span> tài khoản
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-muted">
                                <small><i class="si si-users"></i> Thành
                                    viên</small>
                            </div>
                            <div class="font-w600">
                                    <span class="text-danger" data-to="<?= $user ?>"
                                          data-toggle="countTo"></span> đứa
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-muted">
                                <small><i class="si si-users"></i> Đang
                                    Online</small>
                            </div>
                            <div class="font-w600">
                                    <span class="text-success" data-to="<?= $useronline ?>"
                                          data-toggle="countTo"></span> khách,
                                <span class="text-danger" data-to="<?= $memonline ?>"
                                      data-toggle="countTo"></span> thành viên
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nạp thẻ nhanh</h3>
                </div>
                <div class="panel-body">
                    <div class="row text-center">
                        <form id="topup-card" name="topup-card">
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label class="sr-only">Số Seri</label>
                                    <input class="form-control input-sm"
                                           id="" name="cardSerial" placeholder=
                                           "Mã serial" type="text">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label class="sr-only">Mã thẻ</label>
                                    <input class="form-control input-sm"
                                           id="" name="cardPin" placeholder=
                                           "Mã thẻ" type="text">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <select class=
                                            "form-control input-sm input-block"
                                            name="telcoCode">
                                        <option value="VTT">
                                            Thẻ Vietel
                                        </option>
                                        <option value="VMS">
                                            Thẻ Mobifone
                                        </option>
                                        <option value="VNP">
                                            Thẻ Vinaphone
                                        </option>
                                        <option value="MGC">
                                            Thẻ Megacard
                                        </option>
                                        <option value="FPT">
                                            Thẻ Gate
                                        </option>
                                        <option value="ZING">
                                            Thẻ ZING
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <button class=
                                            "btn btn-success btn-sm btn-block"
                                            data-loading-text="Đang xử lý..." id=
                                            "btn-topup" type="button">Nạp
                                        luôn
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php if (!$not): ?>
        <div class="block remove-margin-b remove-padding-b">
            <div class="block-content bg-gray-lighter text-center remove-padding-b">
                <h2 class="page-heading">Tài khoản <?= $query[0]['loainick'] ?> #<?= $query[0]['id'] ?> - Giá:
                    <span class="text-danger"><?= number_format($query[0]['gia'], 0, '.', '.'); ?> <sup class=
                                                                                                        "text-muted">vnđ </sup></span>
                </h2>
                <div class="font-s14">
                    <?= $query[0]['noidung'] ?>
                </div>
                <button class="btn btn-primary push-15-t" data-loading-text="Chờ..." id="btn-buy" type="button"><i
                            class="fa fa-check"></i> Mua luôn
                </button>
            </div>
        </div>

        <div class="block bg-gray-lighter remove-margin-b">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#imgs" aria-controls="imgs" role="tab" data-toggle="tab"
                                      aria-expanded="true">Hình ảnh</a></li><? if ($query[0]['loainick'] == "LMHT"): ?>
                    <li class=""><a href="#champions" aria-controls="champions" role="tab" data-toggle="tab"
                                    aria-expanded="false">Tướng</a></li>
                    <li class=""><a href="#skins" aria-controls="skins" role="tab" data-toggle="tab"
                                    aria-expanded="false">Skin</a></li> <? endif; ?></ul>
            <div class="block-content tab-content remove-padding-b">
                <div class="tab-pane active" id="imgs" role="tabpanel">
                    <!-- Slider with dots and hover arrows -->
                    <div class="js-slider slick-nav-white slick-nav-hover" data-slider-dots="true"
                         data-slider-arrows="true" role="toolbar">
                        <?php $image = explode("|", $query[0]['hinhanh']); ?>
                        <?php foreach ($image as $row): ?>
                            <img class="img-responsive" src="<?= $row ?>">
                        <?php endforeach; ?>


                    </div>
                    <!-- END Slider with dots and hover arrows -->
                </div>
                <? if ($query[0]['loainick'] == "LMHT"): ?>

                    <div class="tab-pane" id="champions" role="tabpanel">
                        <ul class="hide-bullets">
                            <?php
                            $champs = explode('|', $query[0]['champs']);
                            foreach ($champs as $row): ?>
                                <?php $champs1 = explode('-', $row); ?>
                                <li class="col-xs-3 col-sm-1"><img class="img-responsive thumbnail"
                                                                   src="<?= base_url() ?>assets/champs/<?= $champs1[0] ?>_Web_0.jpg"
                                                                   title="<?= $champs1[1] ?>"></li>
                            <?php endforeach; ?>


                        </ul>
                    </div>
                    <div class="tab-pane" id="skins" role="tabpanel">
                        <ul class="hide-bullets">
                            <?php
                            $skins = explode('|', $query[0]['skins']);
                            foreach ($skins as $row): ?>
                                <?php $skins1 = explode('=', $row); ?>
                                <li class="col-xs-6 col-sm-2">
                                    <div class="featured-article">
                                        <img class="img-responsive thumbnail"
                                             src="<?= base_url() ?>assets/skins/<?= $skins1[0] ?>.jpg"
                                             title="<?= $skins1[1] ?>">
                                        <div class="block-title text-center"><?= $skins1[1] ?></div>
                                    </div>
                                </li>
                            <?php endforeach; ?>


                        </ul>
                    </div>
                <? endif; ?>
            </div>

            <div class="block-content remove-padding-b">
                <div class="fb-comments" data-width="100%" data-href="<?= base_url() ?>acc?id=<?= $query[0]['id'] ?>"
                     data-numposts="5" data-order-by="reverse_time"></div>

            </div>
        </div>
    <?php else: ?>
        <div class="block remove-margin-b remove-padding-b">
            <div class="alert alert-danger">
                <span><strong>Opps!</strong> Tài khoản này không có hoặc đã bị xóa.</span>
            </div>
        </div>
    <?php endif; ?>
    <footer class=
            "content-mini content-mini-full font-s12 bg-gray-lighter clearfix" id=
            "page-footer">
        <div class="text-center">
            © <span class="js-year-copy">2016</span> <a class="font-w600"
                                                        href="/">ACCLMHT247</a> | <a class="font-w600"
                                                                                     href="http://" target="_blank">Shop
                Acc CF</a>

        </div>
        <div class="text-center">
            Crafted with <i class="fa fa-heart text-city"></i> by <a class=
                                                                     "font-w600" href="https://facebook.com/toanmsc"
                                                                     target=
                                                                     "_blank">toanmsc</a>
        </div>
    </footer>
</div>
<div class="modal fade" id="requestModal" role="dialog" tabindex="-1">
</div>

<script src="assets/js/jquery.min.js">
</script>
<script src="assets/js/bootstrap.min.js">
</script>
<script src="assets/js/jquery.slimscroll.min.js">
</script>
<script src="assets/js/bootstrap-notify/bootstrap-notify.min.js">
</script>
<script src="assets/js/bootstrap-show-password.js">
</script>
<script src="assets/js/slick/slick.min.js">
</script>
<script src="assets/js/jquery.appear.min.js">
</script>
<script src="assets/js/jquery.countTo.min.js">
</script>
<script src="assets/js/jquery.showHideItem.js">
</script>
<script src="assets/js/core.js">
</script>
<script type="text/javascript">
    $(document).ready(function () {
        var req;
        $("#btn-buy").click(function () {
            var $btn = $(this);
            $btn.button('loading');
            if (req) {
                req.abort();
            }
            req = $.ajax({
                url: "getacc?act=buy",
                type: "POST",
                data: "id=<?=$query[0]['id']?>"
            });
            req.done(function (response, textStatus, jqXHR) {
                var json = $.parseJSON(response);
                console.log(json);
                if (json.err == 0) {
                    App.notifyTopCenter('<strong>Ok!</strong> ' + json.msg, 'success', 'fa fa-times');
                } else {
                    App.notifyTopCenter('<strong>Opps!</strong> ' + json.msg, 'danger', 'fa fa-times');
                }
                $btn.button('reset');
            });
            event.preventDefault();
        });
    });</script>

<!-- Mirrored from php-huyvandnc.rhcloud.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2016 22:11:19 GMT -->
</body>
</html>
