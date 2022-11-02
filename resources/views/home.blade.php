@extends('layout.layout')

@section('nav')
<div class="flex-row">
  @foreach ( $links as $link )
    <a href="">{{ $link['label'] }}</a>
  @endforeach
</div>
@endsection
