@extends($THEME, ['PAGE' => 'dashboard'])

@section('content')
    <div class="container-fluid">
        <system-user-edit :id="{{$id}}"></system-user-edit>
    </div>
@endsection
