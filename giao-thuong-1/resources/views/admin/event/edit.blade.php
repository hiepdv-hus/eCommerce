@extends($THEME, ['PAGE' => 'event'])

@section('content')
    <div class="container-fluid">
        <event-edit :id="{{$id}}"></event-edit>
    </div>
@endsection

