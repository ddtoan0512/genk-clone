@extends('layouts.admin')
@section('content')

<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">
            Quản lý bài viết </h3>
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
                    Danh sách bài viết
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        @can('create', App\Post::class)
                        <a href="{{ route('admin.post.create') }}" class="btn btn-bold btn-label-brand btn-sm"><i
                                class="la la-plus"></i>
                            Thêm bài viết</a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table id="table_post" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr role="row">
                        <th class="sorting">ID</th>
                        <th class="sorting">Tiêu đề</th>
                        <th class="sorting">Danh mục</th>
                        <th class="sorting">Người đăng</th>
                        <th class="sorting">Trạng thái</th>
                        <th class="sorting">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr id="cate{{$post->id}}">
                        <td>{{ $post->id }}</td>
                        <td><a href="{{ route('get.detail.post', [$post->slug, $post->id]) }}"
                                target="_blank">{{ $post->title }}</a></td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>
                            @if ($post->status === 1)
                            <span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Được xuất
                                bản</span>
                            @else
                            <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Chưa được xuất
                                bản</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.post.edit', $post->id) }}" type="button"><i class="fa fa-edit ml-3"
                                    style="font-size: 20px"></i></a>
                            <button class="btn btnDelete" data-toggle="modal" data-id="{{ $post->id }}" data-target="#confirm-delete">
                                <i class="fa fa-trash" style="font-size: 20px; color: red"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--end: Datatable -->
        </div>
    </div>
</div>
<!-- end:: Content  -->

@if(isset($post))
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Xác nhận xoá bài viết
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn xoá bài viết {{$post->title}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
                <a href="" id="aModalDelete" class="btn btn-danger btn-ok">Xoá bài viết</a>
            </div>
        </div>
    </div>
</div>
@endif
@section('script')

@include('components.admin.message')

<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        $('#table_post').DataTable();
        $('#table_post_info').hide();
        $('.dataTables_length').addClass('bs-select');

        // $(".btnDelete").click(function (e) { // Click to only happen on announce links
        // });

        $(document).on('click', '.btnDelete', function(e) {
            let id = $(this).data('id');
            $("#aModalDelete").attr("href", "/admin/post/delete/" + id );
        });
    });

</script>
<!--begin::Page Vendors(used by this page) -->
<script src="./assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="./assets/js/demo1/pages/crud/datatables/basic/paginations.js" type="text/javascript"></script>
<!--end::Page Scripts -->

@endsection

@endsection
