@extends('layouts.app')

@section('content')
      <h2>Welcome <strong>{{ auth()->user()->name }}</strong></h2>
@endsection
