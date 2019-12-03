@extends('layouts.app')

@section('page-title')
    {{$profile->name}}
@endsection

@section('content')
    <div class="container profile-header-container bg-white">
        <div class="row profile-header-row">
            <div class="col-12">
                {{$profile->name}}
            </div>
        </div>
    </div>
@endsection
