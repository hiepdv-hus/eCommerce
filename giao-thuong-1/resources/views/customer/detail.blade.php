@extends($THEME, ['PAGE' => 'customer'])

@section('content')
    <div class="container-fluid">
        <customer-detail :id="{{$id}}"></customer-detail>
    </div>
@endsection
