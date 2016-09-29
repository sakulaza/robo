@extends('layouts.app_admin')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>分类 <small>» 新增分类</small></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">New Category Form</h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')

                        <form class="form-horizontal" role="form" method="POST" action="/admin/category">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="category" class="col-md-3 control-label">分类url</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="cname" id="cname" value="{{ $cname }}" autofocus>
                                </div>
                            </div>

                            @include('admin.category._form')

                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary btn-md">
                                        <i class="fa fa-plus-circle"></i>
                                        Add New Category
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop