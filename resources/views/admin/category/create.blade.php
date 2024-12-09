@extends('admin.index')
@section('main')

<h1>Thêm danh mục</h1>

<form action="{{ route('category.store') }}" method="post" role="form">
    @csrf
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" name="name" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Trạng thái</label>

            <div class="radio">
                <label for="">
                    <input type="radio" name="status" value="1" checked>
                    Hiển thị
                </label>
            </div>

            <div class="radio">
                <label for="">
                    <input type="radio" name="status" value="0">
                    Tạm ẩn
                </label>
            </div>

            <input type="submit" class="btn btn-primary" value="Nhập">
        </div>
    </div>
</form>
@endsection