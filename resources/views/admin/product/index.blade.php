
    <div class="container-fluid">
        <div class="row">
        <h2>Sản phẩm</h2>
        <a href="{{route("admin.products.create")}}">Thêm sản phẩm</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Số lượng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img style="width: 120px;" src="{{ asset('uploads/' . $item->image) }}" alt="Avatar"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->quanity}}</td>
                    <td>
                        <a href="/admin/products/edit/{{$item->id}}">Sửa</a>

                        <form method="POST" action="admin/products/delete/{{$item->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete Product</button>
                        </form>
                        

                    </td>
                </tr>
                
                @endforeach
                
            </tbody>
        </table>
        </div>
    </div>
