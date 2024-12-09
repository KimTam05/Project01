@extends('admin.index')

@section('main')
    <h1> Danh mục</h1>
    <a href="{{route('category.create')}}" class="btn btn-primary">Thêm mới</a>
    <hr>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cats as $item)
                    <tr>
                        <td>{{ $item->id }}</td> 
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->status == 0 ? 'Tạm ẩn' : 'Hiển thị' }}</td>
                        <td>
                            <form action="{{ route('category.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('category.edit', $item->id) }}" class="btn btn-primary">Sửa</a>
                                <button class="btn btn-danger">Xóa</a>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection