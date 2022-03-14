<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LARAVEL | Primi passi</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center">
                <h1 class="pt-5">HOMEPAGE</h1>
                <a href="{{ route('products') }}">PRODUCTS</a>
                <a href="{{ route('contacts') }}">CONTACTS</a>
            </div>
        </div>
    </div>

</body>

</html>