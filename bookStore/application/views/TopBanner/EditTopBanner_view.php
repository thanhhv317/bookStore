<!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php $count=1; ?>
<form method="POST" class="form-horizontal" enctype="multipart/form-data">
<?php foreach ($data as $key => $value): ?>
    

<div class="row">
    <div class="col-md-12">
        <div class="box box-orange">
            <div class="box-title">
                <h3><i class="fa fa-file"></i> Nội dung<b> Banner số <?php echo $count; $count++; ?></b></h3>
                <div class="box-tool">
                </div>
            </div>
            <div class="box-content">
                
                    <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Hình ảnh</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new img-thumbnail picture" style="width: 200px; height: 150px;">
                                    <img src="<?php echo $value['image'] ?>" alt="" style="width: 200px; height: 150px;" />
                                </div>
                                <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                    
                                </div>
                                <div>
                                   
                                        <!-- <input type="file[]" name="imageAvatar" class="imageAvatar pictureInPut" /> -->
                                 
                                    <input type="text" hidden="" value="<?php echo $value['image']; ?>" class="imageAvatar" name ="image">
                                     <!--  <input type="file" class=" imageAvatar"  /> -->
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Mã banner:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="id" value="<?php echo $value['id'] ?>" class="form-control id" data-rule-required="true" data-rule-minlength="3" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Tiêu đề:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="title" value="<?php echo $value['title'] ?>" class="form-control title" data-rule-required="true" data-rule-minlength="3" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label" >Mô tả:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="description" value="<?php echo $value['description'] ?>" class="form-control description" data-rule-required="true" data-rule-email="true" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label" >Link của button:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="linkbtn" class="form-control linkbtn" data-rule-required="true" value="<?php echo $value['linkbtn'] ?>" data-rule-minlength="6" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Text của button:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="textbtn"  class="form-control textbtn" data-rule-required="true" data-rule-minlength="6" value="<?php echo $value['textbtn'] ?>"  />
                        </div>
                    </div>

                
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
    <div class="row">
        <div class="col-md-8">
      <div class="col-md-4">
          <input type="button" name="submit" class="btn btn-success editData" value="lưu lại"/>
      </div>
    </div>
    </div>

</form>

<script>
$( document ).ready(function() {
   
    
    $('.editData').click(function(event) {
        var dataform = $("form").serializeArray();
        $.ajax({
            url: '../Page/editTopBanner',
            type: 'POST',
            dataType: 'json',
            data: {
                data: dataform  
            }
            ,
            success: function(data) {
                if(data==1){
                    swal("Thành công!", "Dữ liệu đã được cập nhật!", "success");
                    $.ajax({
                        url: '../Page/loadTopBanner',
                        success: function(data) {
                            $('.table-include').html(data);
                        }
            });  
                }
                else{
                    swal("Không thành công!", "Cập nhật dữ liệu thất bại!", "warning");
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