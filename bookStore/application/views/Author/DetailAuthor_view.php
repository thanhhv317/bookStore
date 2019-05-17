<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-user"></i> Thông tin tác giả</h3>
                <div class="box-tool">
                    <!-- <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a> -->
                </div>
            </div>
            <?php foreach ($author as $key => $value): ?>
            	
            <div class="box-content">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive img-thumbnail" src="<?php echo $value['Image']; ?>" alt="profile picture" />
                        <br/>
                        <br/>
                    </div>
                    <div class="col-md-9 user-profile-info">
                        <p style="color:black;font-weight: bold;"><span>Tên Tác giả:</span> <?php echo$value['Name']; ?></p>
                        <p><span>Mã tác giả:</span> <?php echo$value['ID']; ?></p>
                        <p><span>Ngày sinh:</span> <?php echo$value['Birthday']; ?></p>
 
                        <p><span style="color:#f20">Thông tinh:</span> <?php echo$value['Info']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>