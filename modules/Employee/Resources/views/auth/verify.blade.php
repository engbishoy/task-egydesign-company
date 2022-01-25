@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('errors'))
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $errors)
                                {{$errors}}<br>
                            @endforeach
                        </div>
                    @endif

                    Please type the code sent to you by mail to verify the email address
                    
                    
                    <form class="d-inline"  method="POST" action="{{ route('employee.verification.verify') }}">
                    @csrf
                    <input type="text" name="code_verify" style="margin-bottom: 20px;" class="form-control">
                    <input type="submit" class="btn btn-success" value="verify">
                    </form>
                    <br>
                    <form method="POST" action="{{ route('employee.verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">resend</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
