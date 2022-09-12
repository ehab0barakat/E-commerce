@extends("layouts.app")



@section("content")


<div class="skincolor">hello {{ Auth::user()->fname }}</div>


@endsection
