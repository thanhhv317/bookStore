

<div class="row">
    <div class="col-md-12">
        <div class="box box-green">
            <div class="box-title">
                <h3><i class="fa fa-book"></i> Danh sách Sách</h3>
                <div class="box-tool">
                    <!-- <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a> -->
                </div>
            </div>
            <div class="box-content">
                <!-- chức năng -->
                <div class="btn-toolbar pull-right">
                    <div class="btn-group">
                        <a class="btn btn-circle show-tooltip add-new" title="Thêm mới" ><i class="fa fa-plus"></i></a>
                        <a class="btn btn-circle show-tooltip" title="Edit selected" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-circle show-tooltip" title="Delete selected" href="#"><i class="fa fa-trash-o"></i></a>
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
                               
                                <th>Mã sách</th>
                                <th>Tên sách</th>
                                <th>Tác giả</th>
                                <th class="text-center">Thể loại</th>
                                <th>Số lượng</th>
                                <th>Giá tiền</th>
                              
                                <th class="visible-md visible-lg" style="width:130px">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- nội dung của table -->
                            <?php foreach ($book as $key => $value): ?>
                                

                            <tr class="table-flag-blue">
                                
                                <td><?php echo $value['ID']; ?></td>
                                <td><?php echo $value['Name']; ?></td>
                                <td><?php echo $value['NameTG']; ?></td>
                                <td class="text-center"><?php echo $value['NameTL']; ?></td>
                                <td ><span class="label label-success"><?php echo $value['Quantity']; ?></span>
                                </td>
                                <td><?php echo $value['Price']; ?> VND</td>
                                <td class="visible-md visible-lg">
                                    <div class="btn-group">
                                        <a class="btn btn-sm show-tooltip view-detail" onclick="getIDBook('<?php echo $value['ID']; ?>')" title="View"  data-toggle="modal" data-target="#myModal"><i class="fa fa-search-plus"></i></a>
                                        <a class="btn btn-sm show-tooltip edit-detail" title="Edit" onclick="getIDBook('<?php echo $value['ID']; ?>')" title="View"  data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-sm btn-danger show-tooltip delete-book" title="Delete" onclick="getIDBook('<?php echo $value['ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
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
    var view_url="";
    var edit_url="";
    function getIDBook(idReceive){
        id =idReceive;
        view_url="detailBook/"+id;
        edit_url="editBook/"+id;
    }
    

    $(".view-detail").click(function(event) {
        $.ajax({
            url: view_url,
            success: function(data) {
                $('.modal-body').html(data);
            }
        });  
        
    });
    $(".edit-detail").click(function(event) {
        $.ajax({
            url: edit_url,
            success: function(data) {
                $('.modal-body').html(data);
            }
        });  
        
    });
    $(".add-new").click(function(event) {
        $.ajax({
            url: 'addBook',
            success: function(data) {
                $('.table-include').html(data);
            }
        });  
        
    });
    $('.delete-book').click(function(event) {
        
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
                        url: 'deleteBook/'+id,
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