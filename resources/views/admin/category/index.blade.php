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
                        <button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal"
                            data-target="#kt_modal_add_cate">
                            <i class="la la-plus"></i>
                            Thêm danh mục
                        </button>
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
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>

            <!--end: Datatable -->
        </div>
    </div>
</div>

<!-- end:: Content -->

<!--begin::Modal-->
<div class="modal fade" id="kt_modal_add_cate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm mới danh mục</h5>
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
                        <button type="submit" class="btn btn-primary" id="btnSaveCategory">Lưu</button>
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
        $('.dataTables_length').addClass('bs-select');
			

        $('#category_form').validate({ // initialize the plugin
            rules: {
                category_name: {
                    required: true,
                },
                category_description: {
                    required: true,
                }
            },
            messages: {
                category_name: "Tên danh mục không được để trống",
                category_description: "Mô tả danh mục không được để trống"
            },
            submitHandler: function () {
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
                            $('#kt_modal_add_cate').modal('hide');
                            $("#category_form").trigger("reset");

                        }
                    }
                })
            }
        });

    });

		
		function loadData(){
			$.ajax({
					url: "{{ route('admin.category.list') }}",
					type: 'GET',
					success: function(res){
						$.each(res.data, function(key, value){
							var html = "<tr>"
									html += `<td>${value.id}</td>`
									html += `<td>${value.name}</td>`
									html += `<td>${value.slug}</td>`
									html += `<td>${value.description}</td>`;

							$('tbody').append(html);
						})
					}
				})
		}

		loadData();

</script>
<!--begin::Page Vendors(used by this page) -->
<script src="./assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="./assets/js/demo1/pages/crud/datatables/basic/paginations.js" type="text/javascript"></script>


<!--end::Page Scripts -->

@endsection

@endsection
