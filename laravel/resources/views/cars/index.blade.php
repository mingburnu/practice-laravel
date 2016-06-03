<!DOCTYPE html>
<html>
<head>
    <title>All Cars</title>
    <style type="text/css">
        form {
            display: inline;
        }

        li {
            display: inline;
            padding-left: 12px;
        }
    </style>
</head>
<body>
@include('layout.top')
<hr>
@foreach($cars as $car)
    <div>
        <hr>
        <label>ID:</label>{{ $car->id }} <br> <label>MODEL:</label>{{ $car->model }} <br> <label>PRODUCE
            DATE:</label>{{ $car->produced_on }}<br> <label>PRICE:</label>${{ $car->price }} <br>

        {!! Form::model($car,['method' => 'DELETE','route'=>['cars.index',$car->id]]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-primary form-control']) !!}
        {!! Form::close() !!}

        {!! Form::model($car,['method' => 'GET','route'=>['cars.edit',$car->id]]) !!}
        {!! Form::submit('Edit', ['class' => 'btn btn-primary form-control']) !!}
        {!! Form::close() !!}

        {!! Form::model($car,['method' => 'GET','route'=>['cars.show',$car->id]]) !!}
        {!! Form::submit('Show', ['class' => 'btn btn-primary form-control']) !!}
        {!! Form::close() !!}

        <hr>
    </div>
@endforeach
{{--{!! $cars->render() !!}--}}

<hr>
<?php $link_limit = 7; ?>

@if($cars->lastPage() > 1)
    <ul class="pagination">
        <li class="{{ ($cars->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $cars->url(1) }}">First</a>
        </li>
        @for($i = 1; $i <= $cars->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $cars->currentPage() - $half_total_links;
            $to = $cars->currentPage() + $half_total_links;
            if ($cars->currentPage() < $half_total_links) {
                $to += $half_total_links - $cars->currentPage();
            }
            if ($cars->lastPage() - $cars->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($cars->lastPage() - $cars->currentPage()) - 1;
            }
            ?>
            @if($from < $i && $i < $to)
                <li class="{{ ($cars->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $cars->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor
        <li class="{{ ($cars->currentPage() == $cars->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $cars->url($cars->lastPage()) }}">Last</a>
        </li>
    </ul>
@endif
<?php echo 'per page:', $cars->perPage(); ?>&nbsp;
<?php echo 'total:', $cars->total(); ?>&nbsp;
<?php echo 'current Page:', $cars->currentPage(); ?>&nbsp;
</body>
</html>
