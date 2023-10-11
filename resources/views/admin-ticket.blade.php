@extends('admin')

@section('title')
    adminPanel
@endsection

@section('mainContent')
    <div class="head">
        <span>Cписок мероприятий</span>
    </div>
    <div class="main">
        <div class="list">
            @foreach ($premiere as $item)
                <?php $i = $item->id - 1; ?>
                <span class="name">{{$item -> name}}: продано -  {{$count[$i]}}</span>
            @endforeach
        </div>
    </div>
@endsection