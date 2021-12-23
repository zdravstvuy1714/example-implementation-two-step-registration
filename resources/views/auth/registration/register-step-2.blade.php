@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Register Step 2 (optional)') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register.step2.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">
                                    {{ __('Country') }}
                                </label>

                                <div class="col-md-6 mb-2">
                                    <select name="country_id" class="form-control @error('country_id') is-invalid @enderror">
                                        <option value="">{{ __('Choose your country...') }}</option>

                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">
                                                {{ $country->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('country_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="name" class="col-md-4 col-form-label text-md-right">
                                    {{ __('Biography') }}
                                </label>

                                <div class="col-md-6">
                                    <textarea
                                        name="biography"
                                        class="form-control @error('biography') is-invalid @enderror"
                                    >{{ old('biography') }}</textarea>

                                    @error('biography')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary mb-2">
                                        {{ __('Finish Registration') }}
                                    </button>

                                    <br>

                                    <a href="{{ route('home') }}">
                                        {{ __('Skip for now') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
