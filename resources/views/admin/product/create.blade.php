@extends('admin.index')
@section('main')

<h1>Thêm sản phẩm</h1>

<form action="{{ route('product.store') }}" method="post" role="form">
    @csrf
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Giá sản phẩm</label>
            <input type="text" name="price" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Ghi chú sản phẩm</label>
            <input type="text" name="content" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Category ID</label>
            <select class="form-select" name="category_id" id="">
                @foreach ($prod as $item => $name)
                    <option value="{{ $item }}"> {{ $name }} </option>
                @endforeach
            </select>
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