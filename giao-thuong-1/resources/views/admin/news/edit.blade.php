@extends($THEME, ['PAGE' => 'news'])

@section('content')
    <div class="container-fluid">
        <news-edit :id="{{$id}}"></news-edit>
    </div>
@endsection











