@extends($THEME, ['PAGE' => 'dashboard'])

@section('content')
    <div class="container-fluid">
        <system-user-update :id="{{$id}}"></system-user-update>
    </div> <!-- container -->
@endsection
