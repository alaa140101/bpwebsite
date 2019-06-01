@extends('layouts.app')

@section('title', $page->title)
    

@section('content')
  <h1 class="display-3"> {!!$page->title!!} </h1>
  <p class="lead"> {!!$page->content!!} </p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>    
@endsection