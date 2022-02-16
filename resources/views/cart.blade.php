@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <link href="{{ asset('css/css-book/navigation.css') }}" rel="stylesheet">
                    <link href="{{ asset('css/css-book/index.css') }}" rel="stylesheet">
                    <table id="customers" style="border: 1px solid #ddd;">
                        <tr>
                            <th width="610px">@lang('form.book.title')</th>
                            <th width="300px">@lang('form.ac.action')</th>
                        </tr>
                        @forelse($cart as $details)
                            <tr>
                                <td style="padding: 10px; width: 20px;" >{{$details->ebook->title}}</td>
                                <td>
                                    <a href="{{url('delete-cart/'.$details->id) }}">@lang('form.delete')</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" style=" background: goldenrod"><center>No data..</center></td>
                            </tr>
                        @endforelse
                        <tr>
                            <td colspan="1">
                                <a type="submit" class="btn btn-submit" href="{{url('loading')}}">@lang('form.submit')</a>
                            <td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


