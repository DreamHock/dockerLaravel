@extends('layouts.authLayout')

@section('content')
    <div class="bg-slate-300 text-sky-800">Welcome {{ Auth::user()->firstName }}</div>
@endsection