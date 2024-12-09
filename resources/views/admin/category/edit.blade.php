@extends('admin.index')
@section('main')

<h1>Sửa danh mục</h1>

<form action="{{ route('category.update', $category->id) }}" method="post" role="form">
    @csrf
    @method('PUT')
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Trạng thái</label>

            <div class="radio">
                <label for="">
                    <input type="radio" name="status" value="1" {{$category->status == 1 ? 'checked': ''}}>
                    Hiển thị
                </label>
            </div>

            <div class="radio">
                <label for="">
                    <input type="radio" name="status" value="0" {{$category->status == 0 ? 'checked': ''}}>
                    Tạm ẩn
                </label>
            </div>

            <input type="submit" class="btn btn-primary" value="Nhập">
        </div>
    </div>
</form>
@endsection