<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page model-controller</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1 class="text-center p-4">My Films List</h1>
    <div class="container d-flex flex-wrap justify-content-around">

        @foreach($movies as $movie)
        <div class="card col-5 m-3" style="width: 18rem;">
            <div class="card-header">
                Featured
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
        </div>
        @endforeach
    </div>
</body>
</html>