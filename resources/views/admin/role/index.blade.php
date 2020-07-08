@extends('layouts.admin')
@section('content')

<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">
            Quản lý vai trò </h3>
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
                    Danh sách vai trò
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        {{-- @can('create', App\Post::class)
                        <a href="{{ route('admin.post.create') }}" class="btn btn-bold btn-label-brand btn-sm"><i
                                class="la la-plus"></i>
                            Thêm bài viết</a>
                        @endcan --}}
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
                        <th class="sorting">slug</th>
                        <th class="sorting">Tên vai trò</th>
                        <th class="sorting">Mô tả</th>
                        <th class="sorting">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr id="cate{{$role->id}}">
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->slug }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->description}}</td>
                        <td>
                            <a href="{{ route('role.edit', $role->id) }}" type="button"><i class="fa fa-edit ml-3"
                                    style="font-size: 20px"></i> Thay đổi quyền</a>
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

@section('script')

<!--begin::Page Vendors(used by this page) -->
<script src="./assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="./assets/js/demo1/pages/crud/datatables/basic/paginations.js" type="text/javascript"></script>
<!--end::Page Scripts -->

@endsection

@endsection
