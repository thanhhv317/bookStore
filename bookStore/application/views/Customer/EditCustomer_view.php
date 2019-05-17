<!-- jquery upload -->
    <script src="../jqueryupload/js/vendor/jquery.ui.widget.js"></script>
    <script src="<?php echo base_url(); ?>jqueryupload/js/jquery.fileupload.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-user"></i> Sửa dữ liệu</h3>
                <div class="box-tool">
                    
                </div>
            </div>
            <div class="box-content">
                <!-- <form action="#" class="form-horizontal"> -->
                  <?php foreach ($customer as $key => $value): ?>
                    
                  
                    <div class="form-group">
                      <label class="col-sm-3 col-lg-2 control-label">Hình ảnh</label>
                      <div class="col-sm-9 col-lg-10 controls">
                          <div class="fileupload fileupload-new" data-provides="fileupload">
                              <div class="fileupload-new img-thumbnail picture" style="width: 200px; height: 150px;">
                                  <img src="<?php echo $value['Image']; ?>" alt="" style="width: 200px; height: 150px;"/>
                              </div>
                              <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                <input type="text" hidden="" value="<?php echo $value['Image']; ?>" class="imageAvatar_old" name ="imageAvatar_old">
                                
                              </div>
                              <div>
                                  <input type="file[]" name="imageAvatar" class="imageAvatar" />
                                  <input type="file" class="imageAvatar" />
                              </div>
                          </div>
                          <br>
                          <span class="label label-important">NOTE!</span>
                          <span>Upload chỉ được các file ảnh định dạng như: jpg, png, jpeg,...</span>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Mã nhân viên</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <div class="input-group">
                                <input type="text" readonly="" value="<?php echo $value['ID']; ?>" class="form-control ID">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Tên nhân viên</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-popover Name" value="<?php echo $value['Name']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Tài khoản</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-popover Username" value="<?php echo $value['Username']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Mật khẩu </label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-popover Password" value="<?php echo $value['Password']; ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Địa chỉ</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-tooltip Address" value="<?php echo $value['Address']; ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Số điện thoại</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-tooltip Phone" value="<?php echo $value['Phone']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Email</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-tooltip Mail" value="<?php echo $value['Mail']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Ngày sinh</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-tooltip Birthday" value="<?php echo $value['Birthday']; ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary update-data" ><i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                    <?php endforeach ?>
                    
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<script>

  // upload file using jquery
  var imageName=$('.imageAvatar_old').val();
  $('.imageAvatar').fileupload({
    url: 'uploadFile',
    dataType: 'json',
    done: function (e, data) {
        $.each(data.result.files, function (index, file) {
           imageName = file.url;
           pic ='<img src="'+ imageName +'" alt="" style="width: 200px; height: 150px;" />';
           $('.picture').html(pic);
        });
    }
  });

    var iurl = '../Customer/updateData/'+$('.ID').val();

    $('.update-data').click(function(event) {
      $.ajax({
      url: iurl,
      type: 'POST',
      dataType: 'json',
      data: {
        id: $('.ID').val(),
        name: $('.Name').val(),
        username: $('.Username').val(),
        password: $('.Password').val(),
        address: $('.Address').val(),
        phone: $('.Phone').val(),
        mail: $('.Mail').val(),
        birthday: $('.Birthday').val(),
        imageAvatar : imageName

      },
      success: function(data) {
      if(data==1){
        swal("Chúc mừng!", "Bạn đã cập nhật thành công dữ liệu !", "success");
          $.ajax({
            url: '../Customer/loadData',
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
    })
    .always(function() {
      console.log("complete");
    })
  });

    
</script>