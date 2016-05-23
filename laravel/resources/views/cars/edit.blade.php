<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<h1>Edit Car</h1>
{!! Form::model($car,['method' => 'PATCH','route'=>['cars.show',$car->id]]) !!}
<div class="form-group">
    {!! Form::label('PRICE', 'PRICE:') !!}
    {!! Form::text('price',null,['class'=>'form-control']) !!}
    {!! Form::label('MAKE', 'MAKE:') !!}
    {!! Form::text('make',null,['class'=>'form-control']) !!}
    {!! Form::label('MODEL', 'MODEL:') !!}
    {!! Form::text('model',null,['class'=>'form-control']) !!}
    {!! Form::label('PRODUCED_ON', 'PRODUCED_ON:') !!}
    {!! Form::text('produced_on',null,['class'=>'form-control']) !!}
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
{!! Form::close() !!}
</body>
</html>
