

<div class="row">
    <div class="col-md-12">
        <div class="box box-green">
            <div class="box-title">
                <h3><i class="fa fa-user"></i> Danh sách khách hàng</h3>
                <div class="box-tool">
                    <!-- <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a> -->
                </div>
            </div>
            <div class="box-content">
                <!-- chức năng -->
                <div class="btn-toolbar pull-right">
                    <div class="btn-group">
                        <a class="btn btn-circle show-tooltip add-new"  data-toggle="modal" data-target="#myModal" title="Thêm mới" ><i class="fa fa-plus"></i></a>
                        
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="fa fa-print"></i></a>
                        <a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i class="fa fa-file-text-o"></i></a>
                        <a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i class="fa fa-table"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="fa fa-repeat"></i></a>
                    </div>
                </div>
                <!-- end chức năng -->

                <br/>
                <br/>
                <!-- bắt đầu table -->
                <div class="table-responsive">
                    <table class="table table-advance">
                        <thead>
                            <tr>
                               
                                <th>Mã khách hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Địa chỉ</th>
                                <th class="text-center">Số điện thoại</th>
                                <th>Email</th>
                                <th>Ngày sinh</th>
                              
                                <th class="visible-md visible-lg" style="width:130px">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- nội dung của table -->
                            <?php foreach ($customer as $key => $value): ?>
                                

                            <tr class="table-flag-blue">
                                
                                <td><?php echo $value['ID']; ?></td>
                                <td><?php echo $value['Name']; ?></td>
                                <td><?php echo $value['Address']; ?></td>
                                <td class="text-center"><?php echo $value['Phone']; ?></td>
                                <td><?php echo $value['Mail']; ?></td>
                                <td><?php echo $value['Birthday']; ?></td>
                                <td class="visible-md visible-lg">
                                    <div class="btn-group">
                                        <a class="btn btn-sm show-tooltip view-detail" onclick="getIDBook('<?php echo $value['ID']; ?>')" title="View"  data-toggle="modal" data-target="#myModal"><i class="fa fa-search-plus"></i></a>
                                        <a class="btn btn-sm show-tooltip edit-detail" title="Edit" onclick="getIDBook('<?php echo $value['ID']; ?>')" title="View"  data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-sm btn-danger show-tooltip delete-customer" title="Delete" onclick="getIDBook('<?php echo $value['ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                            </tr>

                            <?php endforeach ?>
                            
                        </tbody>
                    </table>
                </div>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">← Prev</a>
                        </li>
                        <li><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li class="active"><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">Next → </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var id ="";

    function getIDBook(idReceive){
        id =idReceive;
    }
    

    $(".view-detail").click(function(event) {
        $.ajax({
            url: '../Customer/viewCustomerById/'+id,
            success: function(data) {
                $('.modal-body').html(data);
            }
        });  
        
    });
    $(".edit-detail").click(function(event) {
        $.ajax({
            url: '../Customer/loadViewEdit/'+id,
            success: function(data) {
                $('.modal-body').html(data);
            }
        });  
        
    });
    $(".add-new").click(function(event) {
        $.ajax({
            url: '../Customer/loadViewAdd',
            success: function(data) {
                $('.modal-body').html(data);
            }
        });  
        
    });
    $('.delete-customer').click(function(event) {
        
        swal({
              title: "Bạn có muốn xóa",
              text: "Tất cả dữ liệu sẽ được xóa bỏ khỏi hệ thống!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                    $.ajax({
                        url: '../Customer/deleteData/'+id,
                        success: function(data) {  
                            $('.table-include').html(data);
                        }
                    });
                swal("Xóa thành công", {
                icon: "success",
                });  
            } else {
                swal("Chưa xóa!");
            }
        });
        
    });

</script>