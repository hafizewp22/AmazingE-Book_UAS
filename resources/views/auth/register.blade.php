@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <div class="lower">
                        <div class="lower-title">
                            @lang('form.title.register')
                        </div>
                        <div class="component-container">
                            <div class="component">

                                <div class="upper">
                                    <form class="upper" action="{{ url('register') }}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="upper-left">
                                            <div class="text1">
                                                <table>
                                                    <tr>
                                                        <td width="500">@lang('form.input.first_name')</td>
                                                        <td><input type="text" name="first_name" maxlength="25" title="name"autofocus required/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.last_name')</td>
                                                        <td><input type="text" name="last_name" maxlength="25" title="name" autofocus required/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.gender')</td>
                                                        <td>
                                                            <input type="radio" name="gender_id" value="1" id="male">
                                                            <label name="gender" for="Male">Male</label>
                                                            <input type="radio" name="gender_id" value="2" id="female">
                                                            <label name="gender" for="Male">Female</label><br><br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.password')</td>
                                                        <td><input type="password" name="password" title="password" maxlength="25" required/></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="upper-right">
                                            <div class="text2">
                                                <table>
                                                    <tr>
                                                        <td width="500">@lang('form.input.middle_name')</td>
                                                        <td><input type="text" maxlength="25" name="middle_name" title="name"/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.email_address')</td>
                                                        <td><input type="text" name="email" title="name" autofocus required/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.role')</td>
                                                        <td>
                                                            <select name="role_id" required>
                                                                <option value="">@lang('form.title.choose')</option>
                                                                <option value="1">Admin</option>
                                                                <option value="2">User</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.display_image')</td>
                                                        <td><input type="file" name="display_picture_link" class="form-control" required/></td>
                                                    </tr>
                                                </table>
                                                <td colspan="10">
                                                    <br>
                                                    <center>
                                                        <button type="submit" class="btn-submit">@lang('form.submit')</button><br>
                                                        <a href="{{url('login')}}">@lang('form.title.info-register')</a>
                                                        <br>
                                                        @if($errors->any())
                                                            <i class="text-danger text-center mt-3">{{$errors->first()}}</i>
                                                        @endif
                                                    </center>
                                                <td>
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
