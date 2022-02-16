@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding: 40px;">
                <div class="">
                    <div class="lower">
                        <div class="component-container">
                            <div class="component">
                                <div class="upper">
                                    <form class="upper" action="{{ url('update-profile/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="upper-left">
                                            <div class="text1">
                                                <img src="{{asset('images/'.$user->display_picture_link)}}" alt="" width="200" height="300">
                                            </div>
                                        </div>
                                        <div class="upper-left">
                                            <div class="text1">
                                                <table>
                                                    <tr>
                                                        <td width="500">@lang('form.input.first_name')</td>
                                                        <td><input type="text" value="{{$user->first_name}}" name="first_name" maxlength="25" title="name"autofocus required/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.last_name')</td>
                                                        <td><input type="text" value="{{$user->last_name}}" name="last_name" maxlength="25" title="name" autofocus required/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.gender')</td>
                                                        <td>
                                                            @foreach($genders as $item)
                                                                <input type="radio" name="gender_id" value="{{$item->id}}" {{$user->gender == "1" ? "Male" : '' }} >{{$item->gender_desc}}
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.password')</td>
                                                        <td><input type="password"  name="password" title="password" minlength="8" required/></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="upper-right">
                                            <div class="text2">
                                                <table>
                                                    <tr>
                                                        <td width="500">@lang('form.input.middle_name')</td>
                                                        <td><input type="text" value="{{$user->middle_name}}"  maxlength="25" name="middle_name" title="name"/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.email_address')</td>
                                                        <td><input type="text" value="{{$user->email}}" name="email" title="name" autofocus required/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.role')</td>
                                                        <td>
                                                            <select name="role_id" disabled="disabled">
                                                                <option value="{{$user->roles->id}}">{{$user->roles->role_desc}}</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('form.input.display_image')</td>
                                                        <td><input type="file" name="display_picture_link" class="form-control"></td>
                                                    </tr>
                                                </table>
                                                <td colspan="10">
                                                    <br>
                                                    <center>
                                                        <button type="submit" class="btn-submit">@lang('form.submit')</button><br>
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
