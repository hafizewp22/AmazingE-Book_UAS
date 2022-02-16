@extends('layouts.app')

@section('content')
    @guest
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="">
                    <svg width="100%" height="500">
                        <circle stroke="#B5C9E5" stroke-width="9" fill="white" cx="50%" cy="50%" r="200"></circle>
                        <text fill="#000000" font-size="18" font-family="Verdana" y="50%" x="38%">@lang('test.loading.home_no_login')</text>
                    </svg>
                </div>
            </div>
        </div>
    @else
        @if(auth()->user()->role_id == '1')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <link href="{{ asset('css/css-book/navigation.css') }}" rel="stylesheet">
                            <link href="{{ asset('css/css-book/index.css') }}" rel="stylesheet">

                            <table id="customers" style="border: 1px solid #ddd;">

                                <tr>
                                    <th width="410px">@lang('form.book.author')</th>
                                    <th width="500px">@lang('form.book.title')</th>
                                </tr>
                                @forelse($eBook as $data)
                                    <tr>
                                        <td style="padding: 10px; width: 20px;" >{{$data->author}}</td>
                                        <td style="padding: 10px; width: 20px;" ><a href="{{"detail/".$data->id}}">{{$data->title}}</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td style=" background: goldenrod" colspan="2"><center>No data..</center></td>
                                    </tr>
                                @endforelse
                            </table>
                        </div>
                        <div class="buttonPn text-center" style="padding-left: 0px;">
                            <h3>{{$eBook->links()}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        @elseif(auth()->user()->role_id == '2')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <link href="{{ asset('css/css-book/navigation.css') }}" rel="stylesheet">
                            <link href="{{ asset('css/css-book/index.css') }}" rel="stylesheet">

                            <table id="customers" style="border: 1px solid #ddd;">

                                <tr>
                                    <th width="410px">@lang('form.book.author')</th>
                                    <th width="500px">@lang('form.book.title')</th>
                                </tr>
                                @forelse($eBook as $data)
                                    <tr>
                                        <td style="padding: 10px; width: 20px;" >{{$data->author}}</td>
                                        <td style="padding: 10px; width: 20px;" ><a href="{{"detail/".$data->id}}">{{$data->title}}</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td style=" background: goldenrod" colspan="2"><center>No data..</center></td>
                                    </tr>
                                @endforelse
                            </table>
                        </div>
                        <div class="buttonPn text-center" style="padding-left: 0px;">
                            <h3>{{$eBook->links()}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endguest

@endsection
