

<div class="row">
    <div class="col-md-12">
        <div class="box box-green">
            <div class="box-title">
                <h3><i class="fa fa-user"></i> Danh sách tác giả</h3>
                <div class="box-tool">
                    <!-- <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a> -->
                </div>
            </div>
            <div class="box-content">
                <div class="btn-toolbar pull-right">
                    <div class="btn-group">
                        <a class="btn btn-circle btn-bordered btn-fill btn-to-success show-tooltip add-author" data-toggle="modal" data-target="#myModal" title="Add new record"><i class="fa fa-plus"></i></a>
                        <a class="btn btn-circle btn-bordered btn-fill btn-to-warning show-tooltip" title="Edit selected" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-circle btn-bordered btn-fill btn-to-danger show-tooltip" title="Delete selected" href="#"><i class="fa fa-trash-o"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-circle btn-bordered btn-fill show-tooltip" title="Print" href="#"><i class="fa fa-print"></i></a>
                        <a class="btn btn-circle btn-bordered btn-fill show-tooltip" title="Export to PDF" href="#"><i class="fa fa-file-text-o"></i></a>
                        <a class="btn btn-circle btn-bordered btn-fill show-tooltip" title="Export to Exel" href="#"><i class="fa fa-table"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-circle btn-bordered btn-fill btn-to-lime show-tooltip" title="Refresh" href="#"><i class="fa fa-repeat"></i></a>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table table-advance">
                        <thead>
                            <tr>
                                <th>Mã tác giả</th>
                                <th>Tên tác giả</th>
                                <th>Ngày sinh</th>
                                <th class="visible-md visible-lg" style="width:130px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($author as $key => $value): ?>
                                
                           
                            <tr class="table-flag-red">
                                <td title="hi"><?php echo $value['ID']; ?></td>
                                <td><?php echo $value['Name']; ?></td>
                                <td><?php echo $value['Birthday']; ?></td>
                                <td class="visible-md visible-lg">
                                    <div class="btn-group">
                                        <a class="btn btn-sm show-tooltip view-detail" onclick="getIDBook('<?php echo $value['ID']; ?>')" title="View"  data-toggle="modal" data-target="#myModal"><i class="fa fa-search-plus"></i></a>
                                        <a class="btn btn-sm show-tooltip edit-detail" title="Edit" onclick="getIDBook('<?php echo $value['ID']; ?>')" title="View"  data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-sm btn-danger show-tooltip delete-author" title="Delete" onclick="getIDBook('<?php echo $value['ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach ?>
                           
                        </tbody>
                    </table>
                </div>

                <div class="text-center">
                    <ul class="pagination pagination-bullet">
                        <li class="active">
                            <a href="#"></a>
                        </li>
                        <li>
                            <a href="#"></a>
                        </li>
                        <li>
                            <a href="#"></a>
                        </li>
                        <li>
                            <a href="#"></a>
                        </li>
                        <li>
                            <a href="#"></a>
                        </li>
                        <li>
                            <a href="#"></a>
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
            url: '../Author/loadAuthorByID/'+id,
            success: function(data) {
                $('.modal-body').html(data);
            }
        });  
        
    });
    $(".edit-detail").click(function(event) {
        $.ajax({
            url: '../Author/loadViewEditAuthor/'+id,
            success: function(data) {
                $('.modal-body').html(data);
            }
        });  
        
    });
    $(".add-author").click(function(event) {
        $.ajax({
            url: '../Author/loadViewAddAuthor',
            success: function(data) {
                $('.modal-body').html(data);
            }
        });  
        
    });
    $('.delete-author').click(function(event) {
        
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
                        url: '../Author/deleteAuthor/'+id,
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