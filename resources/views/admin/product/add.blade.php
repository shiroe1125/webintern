@include('admin.layout.head')

<div class="container">
    <h1>Thêm sản phẩm</h1>
    <form action="{{route('admin.products.add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" class="form-control" id="name" name="name"  required>
        </div>
        <div class="form-group">
            <label for="name">Giá</label>
            <input type="text" class="form-control" id="name" name="price" >
        </div>
        <div class="form-group">
            <label for="name">Số lượng</label>
            <input type="text" class="form-control" id="name" name="quantity" required>
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" id="description" name="description"  rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="name">Ảnh sản phẩm</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <input type="submit" class="form-control">
    </form>