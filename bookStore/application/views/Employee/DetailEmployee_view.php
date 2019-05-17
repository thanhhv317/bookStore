<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-user"></i> Thông tin nhân viên</h3>
                <div class="box-tool">
                    <!-- <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a> -->
                </div>
            </div>
            <?php foreach ($employee as $key => $value): ?>
            	
            <div class="box-content">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive img-thumbnail" src="<?php echo $value['Image']; ?>" alt="profile picture" />
                        <br/>
                        <br/>
                    </div>
                    <div class="col-md-9 user-profile-info">
                        <p style="color:black;font-weight: bold;"><span>Tên nhân viên:</span> <?php echo$value['Name']; ?></p>
                        <p><span>Mã nhân viên:</span> <?php echo$value['ID']; ?></p>
                        <p><span>Ngày sinh:</span> <?php echo$value['Birthday']; ?></p>
                        <p><span>Số điện thoại:</span> <?php echo$value['Phone']; ?></p>
                        <p><span>Địa chỉ:</span> <?php echo$value['Address']; ?></p>
                        <p><span>Email:</span> <?php echo$value['Mail']; ?></p>
                        <p><span>Tài Khoản:</span> <?php echo$value['Username']; ?></p>
                        <p><span>Mật khẩu:</span> <?php echo$value['Password']; ?></p>
                        
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>