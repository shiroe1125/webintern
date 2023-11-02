@include('admin.layout.head')
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">

  <h1>Thêm danh mục sản phẩm</h1>

  <form action="submit.php" method="post">

    <div class="mb-3">
      <label for="name" class="form-label">Tên danh mục</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>

  </form>

</div>

</body>
</html>
