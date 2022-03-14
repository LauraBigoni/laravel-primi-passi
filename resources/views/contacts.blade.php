<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>LARAVEL | Contacts</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5 d-flex  justify-content-center">
                <nav class="d-flex">
                    <a class="pe-3" href="{{ route('home') }}"><i class="fa-solid fa-angles-right pe-2"></i>HOMEPAGE</a>
                    <a href="{{ route('products') }}"><i class="fa-solid fa-angles-right pe-2"></i>PRODUCTS</a>
                </nav>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <h1 class="pt-5"> {{ $contacts }} </h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <h3>{{ $name }} {{ $surname }}</h3>
            </div>
        </div>
    </div>
</body>
</html>