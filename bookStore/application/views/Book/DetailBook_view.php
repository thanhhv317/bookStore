<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-file"></i> Thông tin sách</h3>
                <div class="box-tool">
                    <!-- <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a> -->
                </div>
            </div>
            <?php foreach ($book as $key => $value): ?>
            	
            <div class="box-content">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive img-thumbnail" src="<?php echo $value['Image']; ?>" alt="profile picture" />
                        <br/>
                        <br/>
                    </div>
                    <div class="col-md-9 user-profile-info">
                        <p style="color:black;font-weight: bold;"><span>Tên sách:</span> <?php echo$value['Name']; ?></p>
                        <p><span>Mã sách:</span> <?php echo$value['ID']; ?></p>
                        <p><span>Thể loại:</span> <?php echo$value['NameTL']; ?></p>
                        <p><span>Tác giả:</span> <?php echo$value['NameTG']; ?></p>
                        <p><span>Ngày xuất bản:</span> <?php echo$value['Publishing_Year']; ?></p>
                        <p><span>Số lượng:</span> <?php echo$value['Quantity']; ?></p>
                        <p><span>Giá:</span> <?php echo$value['Price']; ?> VND</p>
                        <p><span>Nhà xuất bản:</span> <?php echo$value['NameNXB']; ?></p>
                        <p><span style="color:#f20">Mô tả:</span> <?php echo$value['Description']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>