<!-- jquery upload -->
    <script src="../jqueryupload/js/vendor/jquery.ui.widget.js"></script>
    <script src="<?php echo base_url(); ?>jqueryupload/js/jquery.fileupload.js"></script>

    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-bars"></i> Thêm mới tác giả</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- <form action="#" class="form-horizontal"> -->
 
                    <div class="form-group">
                      <label class="col-sm-3 col-lg-2 control-label">Hình ảnh</label>
                      <div class="col-sm-9 col-lg-10 controls">
                          <div class="fileupload fileupload-new" data-provides="fileupload">
                              <div class="fileupload-new img-thumbnail picture" style="width: 200px; height: 150px;">
                                  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                              </div>
                              <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                              </div>
                              <div>
                                  <input type="file[]" name="imageAvatar" class="imageAvatar" required />
                                  <input type="file" class="imageAvatar" required />
                              </div>
                          </div>
                          <br>
                          <span class="label label-important">NOTE!</span>
                          <span>Upload chỉ được các file ảnh định dạng như: jpg, png, jpeg,...</span>
                      </div>
                    </div>
                  
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Mã Tác giả</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <div class="input-group">
                                <input type="text" class="form-control ID" required>
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Tên Tác giả</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-popover Name" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Ngày sinh</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" required class="form-control show-popover Birthday" placeholder="yyyy-MM-dd" title="ví dụ :2018-12-27" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Thông tin</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <textarea class="form-control Info" required rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-success insert-data" ><i class="fa fa-check"></i> Thêm mới</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                    
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<script>
  
  //upload image using jquery ( not form)
  var imageName="";
  $('.imageAvatar').fileupload({
    url: '../Author/uploadFile',
    dataType: 'json',
    done: function (e, data) {
        $.each(data.result.files, function (index, file) {
           imageName = file.url;
           pic ='<img src="'+ imageName +'" alt="" style="width: 200px; height: 150px;" />';
           $('.picture').html(pic);
        });
    }
  });

  //when clicking the 'thêm mới' button, will be updating the data
  $('.insert-data').click(function(event) {
    $.ajax({
      url: '../Author/insertData',
      type: 'POST',
      dataType: 'json',
      data: {
        id: $('.ID').val(),
        name: $('.Name').val(),
        birthday :$('.Birthday').val(),
        info : $('.Info').val(),
        imageAvatar : imageName
      },
      success: function(data) {
        if(data==1){
          swal("Chúc mừng!", "Bạn đã thêm thành công !", "success");
          $.ajax({
          url: 'loadAuthor',
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