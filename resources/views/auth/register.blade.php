@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('login.register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register',app()->getLocale()) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('users.firstname')}}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('users.lastname')}}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('login.emailaddress') }}</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('login.password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('login.confirmpassword') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('users.institution')}}</label>

                            <div class="col-md-6">
                                <select id="institut" class="form-select @error('institut') is-invalid @enderror" name="institut" value="{{ old('institut') }}" required autocomplete="institut" autofocus>
                                    <option value="cnrst">{{ __('users.cnrst')}}</option>
                                    <option value="ensias">{{ __('users.ensias')}}</option>
                                    <option value="ensmr">{{ __('users.ensmr')}}</option>
                                    <option value="managem">Managem</option>
                                    <option value="mascir">MAScIR</option>
                                    <option value="uca">{{ __('users.uca')}}</option>
                                </select>

                                @error('institut')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="mb-3 row align-middle">
                                <label class="col-sm-2 col-form-label">{{ __('users.institution')}}</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="institut">
                                        <option value="cnrst">{{ __('users.cnrst')}}</option>
                                    <option value="ensias">{{ __('users.ensias')}}</option>
                                    <option value="ensmr">{{ __('users.ensmr')}}</option>
                                    <option value="managem">Managem</option>
                                    <option value="mascir">MAScIR</option>
                                    <option value="uca">{{ __('users.uca')}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('login.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
