<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
</head>
<body>
    <h1>Create a Product</h1>
    
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')


        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>

        <div>
            <input type="submit" value="Save a New Product" />
        </div>
    </form>
</body>
</html>