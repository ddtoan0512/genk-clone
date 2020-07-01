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
                    Cập nhật bài viết
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">
        <form id="post_form" method="POST" action="{{ route("admin.post.update", $post->id) }}" class="needs-validation">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="title" class="form-control-label">Tên bài viết:</label>
                <input type="text" class="form-control" required id="title" value="{{ $post->title  }}" name="title">
                </div>
                <div class="form-group">
                    <label for="description" class="form-control-label">Mô tả:</label>
                <input type="text" class="form-control" required id="description" value="{{ $post->title }}" name="description">
                </div>
                <div class="form-group">
                    <label for="category">Danh mục:</label>
                    <select class="form-control" name="category" id="category">
                        @foreach ($categories as $cate)
                        <option value="{{ $cate->id }}" {{ $cate->id === $post->category_id ? "selected" : "" }}>{{ $cate->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content" class="form-control-label">Nội dung:</label>
                <textarea class="form-control" id="content" name="content">{{ $post->content }}</textarea>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" {{ $post->hot === 1 ? 'checked' : 'f' }} type="checkbox" name="hot" id="hot">
                    <label class="form-check-label" for="hot">
                        Nổi bật
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Quay lại</button>
                    <button type="submit" class="btn btn-primary" value="add" id="btnSavePost">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- end:: Content -->


@endsection

@section('script')
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace("content", {
        height: 650,
        filebrowserBrowseUrl: "{{ asset('js/ckfinder/ckfinder.html') }}",
        filebrowserImageBrowseUrl: "{{ asset('js/ckfinder/ckfinder.html?type=Images') }}",
        filebrowserFlashBrowseUrl: "{{ asset('js/ckfinder/ckfinder.html?type=Flash') }}",
        filebrowserUploadUrl: "{{ asset('js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserImageUploadUrl: "{{ asset('js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
        filebrowserFlashUploadUrl: "{{ asset('js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}"
    });

</script>
@endsection
