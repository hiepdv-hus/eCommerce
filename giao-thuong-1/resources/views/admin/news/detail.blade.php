@extends($THEME, ['PAGE' => 'news'])

@section('content')
    <div class="container-fluid">
        <news-detail :id="{{$id}}"></news-detail>
    </div>
@endsection
