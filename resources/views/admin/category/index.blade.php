@extends('layouts.admin')
@section('content')

<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">
            Quản lý danh mục </h3>
        <span class="kt-subheader__separator kt-hidden"></span>
    </div>
</div>

<!-- end:: Subheader -->

<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Danh sách danh mục
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        @can('create', App\Category::class)
                        <button type="button" class="btn btn-bold btn-label-brand btn-sm" id="createCategory"
                            data-toggle="modal">
                            <i class="la la-plus"></i>
                            Thêm danh mục
                        </button>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table id="table_category" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr role="row">
                        <th class="sorting">ID</th>
                        <th class="sorting">Tên danh mục</th>
                        <th class="sorting">Slug</th>
                        <th class="sorting">Mô tả</th>
                        <th class="sorting">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $cate)
                    <tr id="cate{{$cate->id}}">
                        <td>{{ $cate->id }}</td>
                        <td>{{ $cate->name }}</td>
                        <td>{{ $cate->slug }}</td>
                        <td>{{ $cate->description }}</td>
                        <td>
                            @can('delete', App\Category::class)
                            <a href="" type="button" class="removeCate" data-id="{{ $cate->id}}"><i class="fa fa-trash"
                                    style="font-size: 20px; color: red"></i></a>
                            @endcan
                            @can('update', App\Category::class)
                            <a href="" type="button" class="updateCate" data-id="{{ $cate->id}}"><i
                                    class="fa fa-edit ml-3" style="font-size: 20px"></i></a>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!--end: Datatable -->
        </div>
    </div>
</div>

<!-- end:: Content -->

<!--begin::Modal-->
<div class="modal fade" id="kt_modal_cate" tabindex="-1" role="dialog" aria-labelledby="modelLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modelLabel">Thêm mới danh mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="category_form" class="needs-validation">
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Tên danh mục:</label>
                        <input type="text" class="form-control" required id="category_name" name="category_name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Mô tả:</label>
                        <input type="text" class="form-control" required id="category_description"
                            name="category_description">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quay lại</button>
                        <button type="submit" class="btn btn-primary" value="add" id="btnSaveCategory">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->
@section('script')

<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $('#table_category').DataTable();
        $('#table_category_info').hide();
        $('.dataTables_length').addClass('bs-select');

        $('#createCategory').click(function () {
            $('#modelLabel').text("Thêm danh mục");
            $('#kt_modal_cate').modal('show');
            $("#category_form").trigger("reset");
            $('#btnSaveCategory').val("add");
        })

        // insert category
        $('#btnSaveCategory').click(function (e) {
            if ($('#btnSaveCategory').val() == 'add') {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('admin.category.store') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        'name': $('#category_name').val(),
                        'description': $('#category_description').val(),
                    },
                    success: function (res) {
                        if (res.status) {
                            Swal.fire(
                                'Thêm danh mục thành công!',
                                '',
                                'success'
                            );
                            $('#kt_modal_cate').modal('hide');
                            addRowToDatatable(res.data);
                        }
                    }
                })
            }
        })
        // delete category
        $('body').on('click', '.removeCate', function (e) {
            e.preventDefault();
            var categoryId = $(this).data('id');
            // var el = this;
            if (confirm("Bạn có chắc chắn muốn xoá !")) {
                $.ajax({
                    url: "/admin/category/delete/" + categoryId,
                    type: "DELETE",
                    success: function (res) {
                        if (res.status) {
                            Swal.fire(
                                'Xoá danh mục thành công!',
                                '',
                                'success'
                            );
                            // $(el).closest( "tr" ).remove();
                            location.reload();
                        }
                    }
                })
            }
        });
        // update category
        $('body').on('click', '.updateCate', function (e) {
            var categoryId = $(this).data('id');
            var currentRow = $(this).parent().parent();

            $("#category_form").trigger("reset");
            $('#kt_modal_cate').modal('show');
            $('#btnSaveCategory').val("update");
            $('#modelLabel').text("Cập nhật danh mục");

            $.get("/admin/category/" + categoryId, function (res) {
                $('#category_name').val(res.category.name);
                $('#category_description').val(res.category.description);
            })

            if ($('#btnSaveCategory').val() === 'update') {
                e.preventDefault();
                $('#btnSaveCategory').click(function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: "/admin/category/update/" + categoryId,
                        type: "PUT",
                        dataType: 'json',
                        data: $('#category_form').serialize(),
                        success: function (res) {
                            if (res.status) {
                                Swal.fire(
                                    'Cập nhật danh mục thành công',
                                    '',
                                    'success'
                                );
                                var html = "<tr>";
                                html += "<td>" + res.category.id + "</td>";
                                html += "<td>" + res.category.name + "</td>";
                                html += "<td>" + res.category.slug + "</td>";
                                html += "<td>" + res.category.description + "</td>";
                                html += `<td>
								<a href="" type="button" class="removeCate" data-id="${res.category.id}"><i class="fa fa-trash"
										style="font-size: 20px; color: red"></i></a>
								<a href="" type="button" class="updateCate" data-id="${res.category.id}"><i
										class="fa fa-edit ml-3" style="font-size: 20px"></i></a>
							</td>`;
                                html += "</tr>";
                                currentRow.replaceWith(html);
                                $('#kt_modal_cate').modal('hide');
                            }
                        }
                    })
                })
            }
        });
    });
    //declare function
    function addRowToDatatable(data) {
        $('#table_category').DataTable().row.add([
            data.id,
            data.name,
            data.slug,
            data.description,
            `<a href="" type="button" class="removeCate" data-id="${data.id}"><i class="fa fa-trash" style="font-size: 20px; color: red"></i></a>
		<a href="" type="button" class="updateCate" data-id="${data.id}"><i class="fa fa-edit ml-3" style="font-size: 20px"></i></a>`
        ]).draw();
    }

</script>
<!--begin::Page Vendors(used by this page) -->
<script src="./assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="./assets/js/demo1/pages/crud/datatables/basic/paginations.js" type="text/javascript"></script>


<!--end::Page Scripts -->

@endsection

@endsection
