<!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- jquery upload -->
    <script src="../jqueryupload/js/vendor/jquery.ui.widget.js"></script>
    <script src="<?php echo base_url(); ?>jqueryupload/js/jquery.fileupload.js"></script>


<div class="row">
    <div class="col-md-12">
        <div class="box box-orange">
            <div class="box-title">
                <h3><i class="fa fa-file"></i> Nội dung<b> Banner </b></h3>
                <div class="box-tool">
                </div>
            </div>
            <div class="box-content">
                
                    <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Hình ảnh</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new img-thumbnail picture" style="width: 200px; height: 150px;">
                                    <img src="<?php echo $banner['image']; ?>" alt="" style="width: 200px; height: 150px;" />
                                </div>
                                <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                    
                                </div>
                                <div>
                                   
                                        <input type="file[]" name="imageAvatar" class="imageAvatar pictureInPut" />
                                 
                                    <input type="text" hidden="" value="<?php echo $banner['image']; ?>" class="imageAvatar_old" name ="image">
                                      <input type="file" class=" imageAvatar"  />
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Mã banner:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="id" readonly="" value="<?php echo $banner['id']; ?>" class="form-control id" data-rule-required="true" data-rule-minlength="3" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Tiêu đề:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="title"  value="<?php echo $banner['title']; ?>" class="form-control title" data-rule-required="true" data-rule-minlength="3" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label" >Mô tả:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="description" value="<?php echo $banner['description']; ?>" class="form-control description" data-rule-required="true" data-rule-email="true" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label" >Link của button:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="linkbtn" class="form-control linkbtn" data-rule-required="true" value="<?php echo $banner['linkbtn']; ?>" data-rule-minlength="6" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Text của button:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="textbtn"  class="form-control textbtn" data-rule-required="true" data-rule-minlength="6" value="<?php echo $banner['textbtn']; ?>"  />
                        </div>
                    </div>

                
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-md-8">
      <div class="col-md-4">
          <input type="button" name="submit" class="btn btn-success editData" value="lưu lại"/>
      </div>
    </div>
    </div>

<script>
$( document ).ready(function() {
   
    
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
  $('.editData').click(function(event) {
    $.ajax({
        url: '../Page/updateOneTopBanner',
        type: 'POST',
        dataType: 'json',
        data: {
            id: $('.id').val(),
            title: $('.title').val(),
            description: $('.description').val(),
            linkbtn: $('.linkbtn').val(),
            textbtn: $('.textbtn').val(),
            image : imageName,
        },
        success: function(data){
            if(data==1){
                swal("Chúc mừng!", "Bạn đã cập nhật thành công dữ liệu !", "success");
                $.ajax({
                    url: '../Page/loadTopBanner',
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
    });
    
  });

});
    
</script>