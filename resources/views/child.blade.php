<!-- kaustas resources/views/child.blade.php-->

@extends('layouts.app')

@section('title', 'Page title')

@section('sidebar')
    @parent
    
    <p>See on sidebar lisa</p>
@endsection

@section('content')
    <p>siia tuleb sisu</p>
@endsection