@extends('layouts.admin')
@section('content')
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    {{$role->name}}
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin::Form-->
        <form class="kt-form" action="{{ route('role.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Chọn quyền</label>
                    <div class="kt-checkbox-list">
                        @foreach ($permissions as $permission)
                        <label class="kt-checkbox">
                        <input type="checkbox" {{ $role->permissions->contains($permission->id) ? 'checked' : '' }} name="permissions[]" value="{{ $permission->id }}"> {{$permission->code}}
                            <span></span>
                        </label>
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>

            <!--end::Form-->
        </div>
    </div>

    <!--end::Portlet-->
@endsection