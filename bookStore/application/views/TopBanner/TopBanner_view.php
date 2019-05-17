<!-- Sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<div class="row">
  <div class="col-md-11 " ></div>
    <div class="col-md-1 " >
   
  <button class="btn btn-circle btn-fill btn-bordered btn-lime btn-to-inverse addTopBanner" title="thêm mới" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" ></i></button>
  <button class="btn btn-circle btn-fill btn-bordered btn-primary btn-to-pink editTopBanner" title="chỉnh sửa" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
    </div>

</div>
<br>
<?php $count =0; ?>
<?php foreach ($data as $key => $value): ?>
<?php 
    $count++;

if($count %2==0){
    echo '<div class="row">';
} ?>

    <div class="col-md-6">
        <div class="box box-orange">
            <div class="box-title">
                <h3><i class="fa fa-file"></i> Information profile</h3>
                <div class="box-tool">
                </div>
            </div>
            <div class="box-content">
                <form action="#" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 col-md-2 control-label">Banner:</label>
                        <div class="col-sm-9 col-md-8 controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                                    <img src="<?php echo $value['image'] ?>" alt="" style="width: 200px; height: 150px;" />
                                </div>
                                
                            </div>
                            
                            <p style=" font-weight: bold"><?php echo $value['title'] ?></p>
                            <p style="color:green;"><b style=" font-weight: bold;color:black">Link của button: </b> <?php echo $value['linkbtn'] ?></p>
                            <span class="label label-important"><?php echo $value['id']; ?></span>
                            <span><?php echo $value['description'] ?></span>
                            <div>
                            <p>Text của Button:<i> <?php echo $value['textbtn'] ?></i> </p>
                            <button type="button" onclick="getID('<?php echo $value['id']; ?>')" class="btn btn-primary editBanner" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"> Sửa</i></button> 
                            <button type="button" onclick="getID('<?php echo $value['id']; ?>')" class="btn btn-danger deleteBanner"><i class="fa fa-times"> Xóa</i></button>
                        </div>
                    </div>
                  </div> 
                </form>
            </div>
        </div>
    </div>
    <?php if($count%2==0){
        echo '</div>';
    } ?>

  
<?php endforeach ?>

<!-- END Main Content -->
<script>
    var link ="";
    function getID(linkReceive){
        link=linkReceive;
    }
    $('.addTopBanner').click(function(event) {
        $.ajax({
                url: '../Page/addTopBanner',
                success: function(data) {
                    $('.modal-body').html(data);
                }
            }); 
        });
    $('.editTopBanner').click(function(event) {
        $.ajax({
                url: '../Page/LoadVieweditTopBanner',
                success: function(data) {
                    $('.modal-body').html(data);
                }
            }); 
        });
    $('.deleteBanner').click(function(event) {
        $.ajax({
            url: '../Page/deleteTopBanner/'+link,
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                if(data==1){
                    swal("Thành công!", "Đã xóa!", "success");
                    $.ajax({
                        url: '../Page/loadTopBanner',
                        success: function(data) {
                            $('.table-include').html(data);
                        }
                    }); 
                }
                else{
                    swal("Không thành công!", "Vui lòng kiểm tra lại!", "error");
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
     
    $('.editBanner').click(function(event) {
        $.ajax({
                url: '../Page/getDataToUpdate/'+link,
                success: function(data) {
                    $('.modal-body').html(data);
                }
            }); 
        });    

</script>