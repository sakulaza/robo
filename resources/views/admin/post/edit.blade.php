@extends('layouts.app_admin')

@section('styles')
    <link href="/assets/pickadate/themes/default.css" rel="stylesheet">
    <link href="/assets/pickadate/themes/default.date.css" rel="stylesheet">
    <link href="/assets/pickadate/themes/default.time.css" rel="stylesheet">
    <link href="/assets/selectize/css/selectize.css" rel="stylesheet">
    <link href="/assets/selectize/css/selectize.bootstrap3.css" rel="stylesheet">
    <link href="/assets/css/summernote.css" rel="stylesheet">
@stop

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>Posts <small>&raquo; Edit Post</small></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Post Edit Form</h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')
                        @include('admin.partials.success')

                        <form class="form-horizontal" role="form" method="POST"
                              action="/admin/post/{{ $id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">

                            @include('admin.post._form')

                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-2">
                                        <button type="submit" class="btn btn-primary btn-lg"
                                                name="action" value="continue">
                                            <i class="fa fa-floppy-o"></i>
                                            Save - Continue
                                        </button>
                                        <button type="submit" class="btn btn-success btn-lg"
                                                name="action" value="finished">
                                            <i class="fa fa-floppy-o"></i>
                                            Save - Finished
                                        </button>
                                        <button type="button" class="btn btn-danger btn-lg"
                                                data-toggle="modal" data-target="#modal-delete">
                                            <i class="fa fa-times-circle"></i>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        {{-- Confirm Delete --}}
        <div class="modal fade" id="modal-delete" tabIndex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 class="modal-title">Please Confirm</h4>
                    </div>
                    <div class="modal-body">
                        <p class="lead">
                            <i class="fa fa-question-circle fa-lg"></i> &nbsp;
                            Are you sure you want to delete this post?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <form method="POST" action="/admin/post/{{ $id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="button" class="btn btn-default"
                                    data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-times-circle"></i> Yes
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script src="/assets/pickadate/picker.js"></script>
    <script src="/assets/pickadate/picker.date.js"></script>
    <script src="/assets/pickadate/picker.time.js"></script>
    <script src="/assets/selectize/selectize.min.js"></script>
    <script src="/assets/js/summernote.min.js"></script>
    <script src="/assets/js/summernote-zh-CN.js"></script>
    <script>
        $(document).ready(function() {
            $('#content2').summernote({
                height:300,
                lang:'zh-CN',
                toolbar:[["style",["style"]],["font",["bold","underline","clear"]],["fontname",["fontname"]],
                    ["fontsize",["fontsize"]],
                    ["color",["color"]],["para",["ul","ol","paragraph"]],["table",["table"]],
                    ["insert",["link","picture","video"]],
                    ["view",["fullscreen","codeview","help"]]],
                callbacks: {
                    onImageUpload: function(files) {
                        url = $(this).data('upload'); //path is defined as data attribute for  textarea
                        sendFile(files[0], url, $(this));
                    }
                }
            });
            function sendFile(file, url, editor) {
                var data = new FormData();
                data.append("file", file);
                $.ajax({
                    data: data,
                    type: "POST",
                    url: url,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(objFile) {
                        editor.summernote('insertImage',objFile.url+'/'+objFile.file);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                    }
                });
            }
        });
        $(function() {
            $("#publish_date").pickadate({
                format: "mmm-d-yyyy"
            });
            $("#publish_time").pickatime({
                format: "h:i A"
            });
            $("#tags").selectize({
                create: true
            });
        });
    </script>
@stop