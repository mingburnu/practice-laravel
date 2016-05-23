<!DOCTYPE html>
<html>
<head>
    <title>All Cars</title>
</head>
<body>

@foreach($cars as $car)
    <div>
        {!! Form::model($car,['method' => 'DELETE','route'=>['cars.index',$car->id]]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-primary form-control']) !!}

        <form>
        </form>{{ $car->id }} / {{ $car->model }} / {{ $car->produced_on }}
    </div>
@endforeach

</body>
</html>
