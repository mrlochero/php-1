<!-- Modal -->
<div class="modal-dialog modal-lg modal-dialog-top">
    <div class="modal-content">
        <div class="block block-themed block-transparent remove-margin-b">
            <div class="block-header bg-primary-dark">
                <ul class="block-options">
                    <li>
                        <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                    </li>
                </ul>
                <h3 class="block-title">Thêm tài khoản Game</h3>
            </div>
            <div class="block-content remove-padding-b">
                <form role="form" id="add-account" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        Game
                                    </div>
                                    <select class="form-control" name="loainick" id="loainick">
                                        <option value="LMHT">
                                            Liên Minh Huyền Thoại
                                        </option>
                                        <option value="CF">
                                            Đột Kích
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="divlol" id="LMHT">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            Rank
                                        </div>
                                        <select class="form-control" name="rank">
                                            <option value="provisional">
                                                Chưa rank
                                            </option>
                                            <option value="bronze">
                                                Đồng
                                            </option>
                                            <option value="silver">
                                                Bạc
                                            </option>
                                            <option value="gold">
                                                Vàng
                                            </option>
                                            <option value="platinum">
                                                Bạch kim
                                            </option>
                                            <option value="diamond">
                                                Kim cương
                                            </option>
                                            <option value="master">
                                                Cao thủ
                                            </option>
                                            <option value="challenger">
                                                Thách đấu
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tướng</label>
                                    <textarea class="form-control" rows="2" name="tuong"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Skin</label>
                                    <textarea class="form-control" rows="2" name="skin"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" placeholder="Giá" name="price" type="number" autofocus="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Khuyễn mãi</label>
                                <div class="input-group">
                                    <input class="form-control" placeholder="Khuyễn mãi" name="promo" type="number"
                                           maxlength="3" value="0">
                                    <div class="input-group-addon">%</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Thông tin đăng nhập</label>
                                <input class="form-control" placeholder="id:password" id="idpassword" name="idpassword"
                                       type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Thông tin</label>
                                <textarea class="form-control" rows="2" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <textarea class="form-control" rows="2" name="imgs"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group remove-margin-b">
                                <label class="css-input switch switch-sm switch-primary">
                                    <input type="checkbox" id="active" name="active" checked="true"><span></span> Kích
                                    hoạt?
                                </label>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-sm btn-primary" id="btn-save" data-loading-text="Chờ..."><i
                        class="fa fa-check"></i> Lưu
            </button>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var req;

        $("#btn-save").click(function () {
            var $btn = $(this);
            $btn.button('loading');
            if (req) {
                req.abort();
            }
            req = $.ajax({
                url: "addaccount?act=saveacc",
                type: "POST",
                data: $("#add-account").serialize()
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
        $(function () {    // Makes sure the code contained doesn't run until
            //     all the DOM elements have loaded

            $('#loainick').change(function () {
                $('.divlol').hide();
                $('#' + $(this).val()).show();
                $('#' + $(this).val()).show();
            });

        });

    });
</script>
			