@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/blog_single_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/blog_single_responsive.css') }}">
    <!-- Single Blog Post -->

    <div class="single_post">
        <div class="container">
            <div class="row">
                @foreach ($posts as $row)
                <div class="col-lg-8 offset-lg-2">
                    <div class="single_post_title">
                        @if(Session()->get('lang') == 'hindi')
                            {{ $row->post_title_in }}
                        @else
                            {{ $row->post_title_en }}
                        @endif
                    </div>
                    <div class="single_post_text">
                          <p>
                            @if(Session()->get('lang') == 'hindi')
                                {!! $row->details_in !!}
                            @else
                                {!! $row->details_en !!}
                            @endif
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


@push('scripts')
    <script src="{{ asset('frontend/js/blog_single_custom.js') }}"></script>
@endpush

@endsection
