@extends('backend.layout.index')
@section('style')
    <style>
        input[type=checkbox]{
            width: 20px;
            height: 20px;
        }

    </style>
    @endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('backend.pages.content-header', ['type'=>'Permission','action'=>'Thêm permission'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @if (session('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert @if(session('isSuccess')) ? alert-success @else alert-danger @endif">
                                {{session('message')}}
                            </div>
                        </div>
                    </div>
                @endif
{{--                    @if (count($errors) > 0)--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="alert alert-danger">--}}
{{--                                    @foreach ($errors->all() as $error)--}}
{{--                                        {{$error}}<br>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}
                <div class="row">
                    <div class="col-12">
                        <form role="form" action="admin/permission/add" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter ..." >
                                        @error('name')
                                        <div class="invalid-feedback d-block">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <input name="display_name" type="text" class="form-control  @error('display_name') is-invalid @enderror" placeholder="Enter ...">
                                        @error('display_name')
                                        <div class="invalid-feedback d-block">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Chọn module cha</label>
                                        <select name="parent_id" class="form-control">
                                            <option value="0">--Module cha--</option>
                                           {!!$htmlSelectData!!}
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Key Code</label>
                                        <input name="key_code" type="text" class="form-control @error('key_code') is-invalid @enderror" placeholder="Nhập Key Code">
                                        @error('key_code')
                                        <div class="invalid-feedback d-block">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
@section('script')
    <script>

    </script>
    @endsection
