@extends($THEME, ['PAGE' => 'customer'])

@section('content')
    <div class="container-fluid">
        <customer-edit :id="{{$id}}"></customer-edit>
    </div>
@endsection
