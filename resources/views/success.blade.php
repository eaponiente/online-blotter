@extends('layouts.main')
<style>
    i {
    color: #9ABC66;
    font-size: 100px;
    line-height: 200px;
    margin-left:-15px;
    }
</style>
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded text-center" style="margin:3% 0;max-width:400px;height:400px">
                <!--<div class="logo text-center">
                    <span class="db"><img src="{{ asset('assets/images/logo.png') }}" width="150" alt="logo"></span>
                </div>-->

            <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                <i class="checkmark">✓</i>
            </div>

            <h1>Success</h1> 
            <p>We received your purchase request;<br/> we'll be in touch shortly!</p>
        </div>
    </div>
@endsection