@extends('layouts.app')

@section('page-title')
    {{$profile->name}}
@endsection

@section('content')
    <div class="container profile-header-container bg-white">
        <div class="row profile-header-row">
            <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3">
                @if($profile->profilephoto_file_name)
                    <img src="{{$profile->profilephoto_file_name->url('medium')}}" alt="Profile photo">
                @endif
            </div>
            <div class="col-md-9 col-sm-12 col-lg-9 col-xl-9">
                {{$profile->name}}
            </div>
        </div>
    </div>
@endsection
