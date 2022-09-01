<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/product" method="post" enctype="multipart/form-data">
    @csrf
    <h1>name</h1>
    <input type="text" name="name">
    <br>
    <br>
    <h1>price</h1>
    <input type="number" name="price">
    <br>
    <br>
    <h1>size</h1>
    <input type="text" name="Size">
    <br>
    <br>
    <h1>brand</h1>
    <input type="text" name="Brand">
    <br>
    <br>
    <h1>category</h1>
    <input type="text"name="category">
    <br>
    <br>
    <h1>AvaliableColor</h1>
    <input type="text"name="AvaliableColor">
    <br>
    <br>
    <h1>description</h1>
    <textarea name="description">

    </textarea>
<br>
    <br>
    <br>
    <h1>image</h1>
    <input type="file" name="image">


    <br>
    <br>

    <input type="submit" value="submit">


</form>
</body>
</html>
