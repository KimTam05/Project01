@extends('admin.index')

@section('main')
    <h1> Danh mục</h1>
    <a href="{{route('product.create')}}" class="btn btn-primary">Thêm mới</a>
    <hr>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Content</th>
                    <th scope="col">Category ID</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prod as $item)
                    <tr>
                        <td>{{ $item->id }}</td> 
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->image }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->content }}</td>
                        <td>{{ $item->category_id }}</td>
                        <td>{{ $item->status == 0 ? 'Tạm ẩn' : 'Hiển thị' }}</td>
                        <td>
                            <form action="{{ route('product.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary">Sửa</a>
                                <button class="btn btn-danger">Xóa</a>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection