@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <div class="lower">
                        <div class="lower-title">
                            @lang('form.title.login')
                        </div>
                        <div class="component-container">
                            <div class="component">

                                <div class="upper">
                                    <form class="upper" action="/login" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="upper-left">
                                            <div class="text1">
                                                <table>
                                                    <tr>
                                                        <td width="500">@lang('form.input.email')</td>
                                                        <td><input type="email" name="email" title="email" required/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.password')</td>
                                                        <td><input type="password" name="password" title="password" minlength="8" required/></td>
                                                    </tr>
                                                </table>
                                                <td colspan="10">
                                                    <br>
                                                    <center>
                                                        <button type="submit" class="btn-submit">@lang('form.submit')</button><br>
                                                        <a href="{{url('register')}}">@lang('form.title.info-login')</a>
                                                        <br>
                                                        @if($errors->any())
                                                            <i class="text-danger text-center mt-3">{{$errors->first()}}</i>
                                                        @endif
                                                    </center>
                                                <td>
                                            </div>
                                        </div>

                                        <div class="upper-right">
                                            <div class="text2">
                                                <table>
                                                    <tr>
                                                        <td width="500"></td>
                                                        <td></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
