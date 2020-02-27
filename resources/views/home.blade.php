@extends('layouts.app')

@section('page-title')
    My Account
@endsection

@section('nav')
    @include('layouts.nav')
@endsection

@section('content')
    <div class="account-ribbon">

    </div>
<div class="container">
    <div class="row bg-white">
        <div class="col-2">

        </div>
        <div class="col-10 main">
            <div class="action__panel">
                @if(auth()->user()->isAdmin())
                    <a href="/admin">Go to dashboard</a>
                @endif
            </div>
            <div class="account__header">
                My Account
            </div>
        </div>
    </div>
</div>
@endsection
