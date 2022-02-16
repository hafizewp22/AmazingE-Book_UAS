@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <div class="lower">
                        <div class="lower-title">
                            {{$user->first_name.' '.$user->middle_name.' '.$user->last_name}}
                        </div>
                        <div class="component-container">
                            <div class="component">
                                <div class="upper">
                                    <form class="upper" action="{{ url('update-role/'.$user->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="upper-left">
                                            <div class="text1">
                                                <table>
                                                    <tr>
                                                        <td>@lang('form.input.role')</td>
                                                        <td>
                                                            <select name="role_id" required>
                                                                <option value="">@lang('form.title.choose')</option>
                                                                @foreach($roles as $item)
                                                                    <option value="{{$item->id}}">{{$item->role_desc}}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <td colspan="10">
                                                    <br>
                                                    <center>
                                                        <button type="submit" class="btn-submit">@lang('form.save')</button><br>
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
