@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('login.verify') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('login.linksent') }}
                        </div>
                    @endif

                    {{ __('login.checkemail') }}
                    {{ __('login.receiveemail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend',app()->getLocale()) }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('login.requestanother') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
