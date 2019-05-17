
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-bars"></i> Thêm dữ liệu</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Mã NXB</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <div class="input-group">
                                <input type="text" placeholder="Thuộc tính khóa không được trùng" class="form-control ID">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Tên NXB</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-popover Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Số điện thoại</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-popover Phone"  />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Địa chỉ </label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-popover Address"  />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Thông tin</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <textarea class="form-control Info"  rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary add-data" ><i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<script>

    $('.add-data').click(function(event) {
      $.ajax({
      url: '../Publisher/insertData',
      type: 'POST',
      dataType: 'json',
      data: {
        id: $('.ID').val(),
        name: $('.Name').val(),
        phone: $('.Phone').val(),
        address: $('.Address').val(),
        info : $('.Info').val()
      },
      success: function(data) {
      if(data==1){
        swal("Chúc mừng!", "Bạn đã cập nhật thành công dữ liệu !", "success");
        $.ajax({
                url: 'loadPublisher',
                success: function(data) {
                    $('.table-include').html(data);
                }
            });  
      }
      else{
        swal("Thất bại!", "Dữ liệu không hợp lệ, Vui lòng kiểm tra lại dữ liệu !", "error");
      }
      }
    })
    .done(function() {
      console.log("success");
    })
    .fail(function() {
      console.log("error");
       swal("Thất bại!", "Dữ liệu không hợp lệ, Vui lòng kiểm tra lại dữ liệu !", "error");
    })
    .always(function() {
      console.log("complete");
    })
  });

    
</script>