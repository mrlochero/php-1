<!-- Modal -->
<?php if ($not): ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Thông báo</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="alert alert-danger">
                    <span><strong>Opps! </strong> Tài khoản này không có hoặc đã bị xóa.</span></div>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>  <?php else: ?>

<div class="modal-dialog modal-lg modal-dialog-top">
    <div class="modal-content">


        <div class="block block-themed block-transparent remove-margin-b">

            <div class="block-header bg-primary-dark">
                <ul class="block-options">
                    <li>
                        <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                    </li>
                </ul>
                <h3 class="block-title">Tài khoản <?= $query[0]['loainick'] ?> #<?= $query[0]['id'] ?></h3>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#imgs" aria-controls="imgs" role="tab" data-toggle="tab"
                                      aria-expanded="true">Hình ảnh</a></li>
                <? if ($query[0]['loainick'] == "LMHT"): ?>
                    <li class=""><a href="#champions" aria-controls="champions" role="tab" data-toggle="tab"
                                    aria-expanded="false">Tướng</a></li>
                    <li class=""><a href="#skins" aria-controls="skins" role="tab" data-toggle="tab"
                                    aria-expanded="false">Skin</a></li>
                <? endif; ?>
            </ul>
            <div class="block-content bg-gray-lighter">
                <div class="row items-push remove-padding-b">
                    <div class="col-xs-12 remove-margin-b">

                        <div class="font-s13 text-muted"><?= $query[0]['noidung'] ?></div>
                    </div>
                </div>
            </div>
            <div class="block-content tab-content remove-padding-b">
                <div role="tabpanel" class="tab-pane active" id="imgs">

                    <!-- Slider with dots and hover arrows -->
                    <div class="js-slider slick-nav-white slick-nav-hover" data-slider-dots="true"
                         data-slider-arrows="true">
                        <?php $image = explode("|", $query[0]['hinhanh']); ?>
                        <?php foreach ($image as $row): ?>
                            <div class="hide"><img class="img-responsive" src="<?= $row ?>"></div>
                        <?php endforeach; ?>


                    </div>
                    <!-- END Slider with dots and hover arrows -->
                </div>
                <? if ($query[0]['loainick'] == "LMHT"): ?>

                    <div role="tabpanel" class="tab-pane" id="champions">
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
                    <div role="tabpanel" class="tab-pane" id="skins">
                        <ul class="hide-bullets">
                            <?php
                            $skins = explode('|', $query[0]['skins']);
                            foreach ($skins as $row): ?>
                                <?php $skins1 = explode('=', $row); ?>
                                <li class="col-xs-6 col-sm-2">
                                    <div class="featured-article">
                                        <img class="img-responsive thumbnail"
                                             src="<?= base_url() ?>assets/skins/<?= $skins1[0] ?>.jpg"
                                             title="<?= $skins1[1] ?? '' ?>">
                                        <div class="block-title text-center"><?= $skins1[1] ?? '' ?></div>
                                    </div>
                                </li>
                            <?php endforeach; ?>


                        </ul>
                    </div>

                <? endif; ?>
            </div>
            <div class="block-content remove-padding-b">
                <div class="fb-comments" data-href="<?= base_url() ?>acc?id=<?= $query[0]['id'] ?>" data-width="100%"
                     data-numposts="5"></div>


            </div>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Đóng</button>
            <button class="btn btn-sm btn-success" onclick="alert('Đã copy link tài khoản #<?= $query[0]['id'] ?>');"
                    data-clipboard-text="http://localhost:8888/shopacc/index.php/acc?id=<?= $query[0]['id'] ?>">
                <i class="fa fa-link"></i> Copy link tài khoản
            </button>
            <button id="btn-buy" data-loading-text="Chờ..." type="button" class="btn btn-sm btn-primary"><i
                        class="fa fa-check"></i> Mua luôn <?= number_format($query[0]['gia'], 0, '.', '.') ?> <sup
                        style="color:white;">vnđ</sup></button>
        </div>
    </div>
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
        });
    </script>
    <?php endif; ?>

			