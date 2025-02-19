<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
</head>
<body>
    <h1>Edit a Product</h1>
    
    <form method="post" action="{{route('product.update', ['product'=>$product])}}">
        @csrf
        @method('put')


        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}" />
        </div>

        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>