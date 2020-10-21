@extends('frontend.layout.index')

@section('content')
<div class="container" style="    padding: 20px 0;">
    <div class="row justify-content-center" style="    display: flex;
    justify-content: center;">
        <div class="col-md-8">
            <div class="card" style="border: 1px solid;">
                <div class="card-header" style="text-align: center;
    padding: 8px 0;
    background: #80808038;">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body" style="padding: 20px 30px">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button style="padding: 0" type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection