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
                            <th width="500px">@lang('form.ac.account')</th>
                            <th width="410px">@lang('form.ac.action')</th>
                        </tr>

                        @forelse($users as $data)
                            <tr>
                                <td>{{$data->first_name.' '.$data->middle_name.' '.$data->last_name.' - '.$data->roles->role_desc}}</td>
                                <td>
                                    <a style="padding: 10%; "href="{{url('edit-role/'.$data->id) }}">@lang('form.ac.update_role')</a>
                                    <a href="{{url('delete-user/'.$data->id) }}">@lang('form.ac.delete')</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" style=" background: goldenrod"><center>No data..</center></td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
