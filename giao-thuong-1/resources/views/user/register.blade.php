@extends($THEME, ['PAGE' => 'account-register'])

@push('css')
    <style>

        .checkout_page_header{
            color: #333333;
            font-size: 32px;
            font-weight: normal;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            padding-left: 0;
        }
    </style>
@endpush

@push('script')
    <script>
        $(function() {

        });
    </script>
@endpush

@section('content')
    <div class="row checkout" style="">
        <form class="form-register" method="post" action="/tai-khoan/dang-ky">
            {{ csrf_field() }}
        </form>
    </div>
@endsection