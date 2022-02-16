@extends('layouts.app')

@section('content')
    @guest
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="">
                    <svg width="100%" height="500">
                        <circle stroke="#B5C9E5" stroke-width="9" fill="white" cx="50%" cy="50%" r="200"></circle>
                        <text fill="#000000" font-size="18" font-family="Verdana" y="50%" x="45%">@lang('test.loading.success_logout')</text>
                    </svg>
                </div>
            </div>
        </div>
    @else
        @if(auth()->user()->role_id == '1')
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="">
                        <svg width="100%" height="500">
                            <circle stroke="#B5C9E5" stroke-width="9" fill="white" cx="50%" cy="50%" r="200"></circle>
                            <text fill="#000000" font-size="18" font-family="Verdana" y="50%" x="47%">@lang('test.loading.success')</text>
                            <text fill="#000000" font-size="18" font-family="Verdana" y="55%" x="43%"><a href="{{url('/')}}">@lang('test.loading.back_home')</a></text>
                        </svg>
                    </div>
                </div>
            </div>
        @elseif(auth()->user()->role_id == '2')
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="">
                        <svg width="100%" height="500">
                            <circle stroke="#B5C9E5" stroke-width="9" fill="white" cx="50%" cy="50%" r="200"></circle>
                            <text fill="#000000" font-size="18" font-family="Verdana" y="50%" x="47%">@lang('test.loading.success')</text>
                            <text fill="#000000" font-size="18" font-family="Verdana" y="55%" x="43%"><a href="{{url('/')}}">@lang('test.loading.back_home')</a></text>
                        </svg>
                    </div>
                </div>
            </div>
        @endif
    @endguest
@endsection
