@extends($THEME, ['PAGE' => 'article'])

@section('content')
    <div class="container-fluid">
        <article-edit :id="{{$id}}"></article-edit>
    </div>
@endsection
