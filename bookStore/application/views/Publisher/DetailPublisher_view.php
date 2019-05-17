<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-file"></i> Thông tin Nhà xuất bản</h3>
                <div class="box-tool">
                    <!-- <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a> -->
                </div>
            </div>
            <?php foreach ($publisher as $key => $value): ?>
            	
            <div class="box-content">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive img-thumbnail" src="http://localhost:8080/php_mvc/bookStore/files/logo.gif" alt="profile picture" />
                        <br/>
                        <br/>
                    </div>
                    <div class="col-md-9 user-profile-info">
                        <p style="color:black;font-weight: bold;"><span>Tên nhà xuất bản:</span> <?php echo $value['Name']; ?></p>
                        <p><span>Mã NXB:</span> <?php echo $value['ID']; ?></p>
                        <p><span>Địa chỉ:</span> <?php echo $value['Address']; ?></p>
                        <p><span>Số điện thoại:</span> <?php echo $value['Phone']; ?></p>
                        <p><span style="color:#f20">Thông tin:</span> <?php echo $value['Info']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>