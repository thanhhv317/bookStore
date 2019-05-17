<!-- jquery upload -->
    <script src="../jqueryupload/js/vendor/jquery.ui.widget.js"></script>
    <script src="<?php echo base_url(); ?>jqueryupload/js/jquery.fileupload.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-bars"></i> Sửa dữ liệu</h3>
                <div class="box-tool">
                    <!-- <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a> -->
                </div>
            </div>
            <div class="box-content">
                <!-- <form action="#" class="form-horizontal"> -->
                  <?php foreach ($book as $key => $value): ?>
                    
                  
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
                        <label class="col-sm-3 col-lg-2 control-label">Mã sách</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <div class="input-group">
                                <input type="text" placeholder="Mã sách" value="<?php echo $value['ID']; ?>" class="form-control ID">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Tên sách</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-popover Name" value="<?php echo $value['Name']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Ngày xuất bản</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-popover Publishing_Year" value="<?php echo $value['Publishing_Year']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Giá </label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-popover Price" value="<?php echo $value['Price']; ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Số lượng</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" class="form-control show-tooltip Quantity" value="<?php echo $value['Quantity']; ?>" />
                        </div>
                    </div>

                    <?php 
                    $idbook = $value['ID'];
                    $tg=$value['ID_Author'];
                    $nxb=$value['ID_Publisher'];
                    $tl=$value['ID_Kind'];
                     ?>
                   <?php endforeach ?>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Thể loại</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <select data-placeholder="Your Favorite Type of Bear" class="form-control chosen-with-diselect Kind" tabindex="-1" id="selCSI">
                              <?php 
                                foreach ($kind as $key => $value) {
                                  if($value['ID']==$tl){
                                    echo '<option selected="" value="'.$value['ID'].'">'.$value['Name'].'</option>';
                                  }else
                                  echo '<option value="'.$value['ID'].'">'.$value['Name'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Nhà xuất bản</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <select data-placeholder="Your Favorite Type of Bear " class="form-control chosen-with-diselect Publisher" tabindex="-1" id="selCSI">
                               <?php 
                                foreach ($publisher as $key => $value) {
                                  if($value['ID']==$nxb){
                                   echo '<option selected value="'.$value['ID'].'">'.$value['Name'].'</option>';
                                  }else
                                  echo '<option value="'.$value['ID'].'">'.$value['Name'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Tác giả</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <select  class="form-control chosen-with-diselect Author" tabindex="-1" id="selCSI">
                                <?php 
                                foreach ($author as $key => $value) {
                                  if($value['ID']==$tg){
                                    echo '<option selected="" value="'.$value['ID'].'">'.$value['Name'].'</option>';
                                  }
                                  else echo '<option value="'.$value['ID'].'">'.$value['Name'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <?php foreach ($book as $key => $value): ?>
                      
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Mô tả</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <textarea class="form-control Description"  rows="3"><?php echo $value['Description']; ?></textarea>
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

    var iurl = 'updateBook/'+$('.ID').val();

    $('.update-data').click(function(event) {
      $.ajax({
      url: iurl,
      type: 'POST',
      dataType: 'json',
      data: {
        id: $('.ID').val(),
        name: $('.Name').val(),
        price: $('.Price').val(),
        quantity: $('.Quantity').val(),
        author: $('.Author option:selected').val(),
        publisher: $('.Publisher option:selected').val(),
        kind: $('.Kind option:selected').val(),
        description : $('.Description').val(),
        publish_year : $('.Publishing_Year').val(),
        image : imageName,

      },
      success: function(data) {
      if(data==1){
        swal("Chúc mừng!", "Bạn đã cập nhật thành công dữ liệu !", "success");
          $.ajax({
            url: 'LoadListBook',
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