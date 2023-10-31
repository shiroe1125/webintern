@include('admin.layout.head')

<div class="container">
    <h1>Add Product</h1>
    <form action="/admin/products/edit/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="name">Giá</label>
            <input type="text" class="form-control" id="name" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="name">Số lượng</label>
            <input type="text" class="form-control" id="name" name="quantity" value="{{ $product->quanity }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" value= "{{ $product->name }}" required ></textarea>
        </div>
        <div class="form-group">
            <label for="name">Ảnh</label>
            <input type="file" class="form-control" id="image" name="image" value=" {{ $product->inmage }}">
        </div>

        <input type="submit" class="form-control">
    </form>