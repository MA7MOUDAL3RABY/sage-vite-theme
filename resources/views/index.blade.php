@extends('layouts.app')

@section('content')

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {{-- {!! get_the_posts_navigation() !!} --}}
@endsection

@section('sidebar')
  @include('layouts.sidebar')
@endsection
