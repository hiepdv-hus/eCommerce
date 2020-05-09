@extends($THEME, ['PAGE' => 'media'])

@section('content')
    <div class="container-fluid">
        <media-list></media-list>
    </div>
    <!-- container -->
@endsection

@push('script')


    <script type="text/javascript">
        jQuery(document).ready(function($){


        });
    </script>
@endpush

@push('stylesheet')
{{--    <link href="/css/media.css" rel="stylesheet" type="text/css" />--}}
@endpush

@push('css')
<style>
    html{
        /*background: #343a40;*/
    }
</style>
@endpush
