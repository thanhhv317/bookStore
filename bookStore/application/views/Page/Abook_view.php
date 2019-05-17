
<?php foreach ($book as $key => $value): ?>
	<div class="col-md-4 text-center animate-box fadeInUp animated-fast">
        <div class="work"  style="background-image: url(<?php echo $value['Image'] ?>);">
            <div class="desc">
                <h3><a class="btn btn-primary add-cart" onclick="getID('<?php echo $value['ID']; ?>','<?php echo $value['Name'] ?>','<?php echo $value['Price'] ?>','<?php echo $value['Image'] ?>','<?php echo $value['NameTG'] ?>')" >Thêm vào giỏ hàng</a></h3>
                <span><a class="btn btn-outline-dark view-detail" data-toggle="modal" data-target="#Notification" onclick="getID('<?php echo $value['ID']; ?>')" >Xem chi tiết</a></span>
            </div>
        </div>
        <p><?php echo $value['Name']; ?></p>
    </div>
<?php endforeach ?>

