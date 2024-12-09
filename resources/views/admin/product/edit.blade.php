@extends('admin.index')
@section('main')

<h1>Sửa sản phẩm</h1>

<form action="{{ route('product.update', $Product->id) }}" method="post" role="form">
    @csrf
    @method('PUT')
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" value="{{ $Product->name }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Ảnh sản phẩm</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Giá cả sản phẩm</label>
            <input type="text" name="name" value="{{ $Product->price }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Ghi chú sản phẩm</label>
            <input type="text" name="name" value="{{ $Product->content }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Category ID</label>
            <select class="form-select" name="category_id" id="">
                @foreach ($prod as $item => $name)
                    <option value="{{ $item }}" {{$Product->item == $item ? 'selected': ''}}> {{ $name }} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Trạng thái</label>

            <div class="radio">
                <label for="">
                    <input type="radio" name="status" value="1" {{$Product->status == 1 ? 'checked': ''}}>
                    Hiển thị
                </label>
            </div>

            <div class="radio">
                <label for="">
                    <input type="radio" name="status" value="0" {{$Product->status == 0 ? 'checked': ''}}>
                    Tạm ẩn
                </label>
            </div>

            <input type="submit" class="btn btn-primary" value="Nhập">
        </div>
    </div>
</form>
@endsection