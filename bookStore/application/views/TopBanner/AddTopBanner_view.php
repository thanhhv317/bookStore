<!-- jquery upload -->
<script src="../jqueryupload/js/vendor/jquery.ui.widget.js"></script>
<script src="<?php echo base_url(); ?>jqueryupload/js/jquery.fileupload.js"></script>

<!-- Sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-bars"></i>Thêm mới Banner cho trang front-end</h3>
                <div class="box-tool">
                    
                </div>
            </div>
            <div class="box-content">
                <form action="#" class="form-horizontal" id="validation-form" method="post">

					<div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Hình ảnh</label>
	                    <div class="col-sm-9 col-lg-10 controls">
	                        <div class="fileupload fileupload-new" data-provides="fileupload">
	                            <div class="fileupload-new img-thumbnail picture" style="width: 200px; height: 150px;">
	                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 200px; height: 150px;" />
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
                        <label class="col-sm-3 col-lg-2 control-label">Mã số banner:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="id"  class="form-control id" data-rule-required="true" data-rule-minlength="3" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Tiêu đề:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="title"  class="form-control title" data-rule-required="true" data-rule-minlength="3" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label" >Mô tả:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="description" class="form-control description" data-rule-required="true" data-rule-email="true" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label" >Link của button:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="linkbtn" class="form-control linkbtn" data-rule-required="true" data-rule-minlength="6" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Text của button:</label>
                        <div class="col-sm-6 col-lg-9 controls">
                            <input type="text" name="textbtn"  class="form-control textbtn" data-rule-required="true" data-rule-minlength="6" data-rule-equalTo="#password" />
                        </div>
                    </div>

                    <hr>

                    
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <input type="button" class="btn btn-primary addBanner" value="Submit">
                            <button type="button" class="btn">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
	
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

	$(".addBanner").click(function(event) {
        $.ajax({
	      	url: '../Page/insertTopBanner',
	      	type: 'POST',
	      	dataType: 'json',
	      	data: {
                id:  $('.id').val(),
    	        title: $('.title').val(),
    	        description: $('.description').val(),
    	        linkbtn: $('.linkbtn').val(),
    	        textbtn: $('.textbtn').val(),
    	        image :imageName
	       },
            success: function(data) {
                if(data==1){
                	swal("Thành công!", "Dữ liệu đã được thêm vào!", "success");
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
	    })
    });
</script>