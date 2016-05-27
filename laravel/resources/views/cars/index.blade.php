<!DOCTYPE html>
<html>
<head>
    <title>All Cars</title>
</head>
<body>

@foreach($cars as $car)
    <div>
        <hr>
        <label>ID:</label>{{ $car->id }} <br> <label>MODEL:</label>{{ $car->model }} <br> <label>PRODUCE
            DATE:</label>{{ $car->produced_on }}<br> <label>PRICE:</label>${{ $car->price }} <br>

        {!! Form::model($car,['method' => 'DELETE','route'=>['cars.index',$car->id]]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-primary form-control']) !!}
        <form>
        </form>
        <hr>
    </div>
@endforeach

</body>
</html>
