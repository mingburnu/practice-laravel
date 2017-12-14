@if($car != null )
        <!DOCTYPE html>
<html>
<head>
    <title>Car {{ $car->id }}</title>
</head>
<body>
<h1>Car {{ $car->id }}</h1>
<ul>
    <li>PRICE: ${{ $car->price }}</li>
    <li>Make: {{ $car->make }}</li>
    <li>Model: {{ $car->model }}</li>
    <li>Produced on: {{ $car->produced_on }}</li>
</ul>
</body>
</html>
<a href="/car"><button>Cars</button></a>
@else
    <h1>404</h1>
@endif
