@extends('layouts.client')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register a New Account') }}</div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('client.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Full Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" name='email' type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Phone Number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('Phone Number') is-invalid @enderror" name="mobile" value="{{ old('Phone Number') }}" required>

                                @error('Phone Number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sel1"  class="col-md-4 col-form-label text-md-right">Select Gender</label>
                            <div class="col-md-6">
                            <select class="form-control" id="sel1">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sel2"  class="col-md-4 col-form-label text-md-right">Select Country</label>
                            <div class="col-md-6">
                            <select class="form-control" id="sel2" name="country">
                                @foreach($countries as $key=>$country)
                                <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group">
                                <div class="input-group mb-6">
                                    <label for="avatar_image" class="col-md-4 col-form-label text-md-right">Choose Image</label>
                                    <input type="file" class="form-control-file col-md-6 justify-content-center" id="avatar_image" name="avatar_image" accept="image/jpeg,png" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                <button type="submit" class="btn btn-primary">
                                    Register
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
