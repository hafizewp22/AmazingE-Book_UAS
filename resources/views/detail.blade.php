@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <div class="lower-title">
                        @lang('form.title.detail')
                    </div>
                    <table id="customers">
                        <tr>
                            <td>
                                <br><a>@lang('form.book.title') : {{$data->title}}</a><br><br>
                                <a>@lang('form.book.author') : {{$data->author}}</a><br><br>
                                <a>@lang('form.book.description') :</a><br><br>
                                <a> {{$data->description}}</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <a class="btn btn-submit" href="/addToCart/{{$data->id}}">@lang('form.rent')</a>
                            <td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
