@extends('layouts.app_admin')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>分类 <small>» 列表</small></h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/category/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 新增分类
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <table id="tags-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>分类url</th>
                        <th>类名</th>
                        <th class="hidden-sm">上级分类</th>
                        <th class="hidden-md">创建时间</th>
                        <th class="hidden-md">更新时间</th>
                        {{--<th class="hidden-md">Layout</th>--}}
                        <th class="hidden-sm">状态</th>
                        <th data-sortable="false">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $c)
                        <tr>
                            <td>{{ $c->cname }}</td>
                            <td>{{ $c->title }}</td>
                            <td class="hidden-sm">{{ $fatherArray[$c->father_id] }}</td>
                            <td class="hidden-md">{{ $c->created_at }}</td>
                            <td class="hidden-md">{{ $c->updated_at }}</td>
                            {{--<td class="hidden-md">{{ $tag->layout }}</td>--}}
                            <td class="hidden-sm">
                                @if ($c->is_active)
                                    启用
                                @else
                                    未启用
                                @endif
                            </td>
                            <td>
                                <a href="/admin/category/{{ $c->id }}/edit" class="btn btn-xs btn-info">
                                    <i class="fa fa-edit"></i> 编辑
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{--{!! $categories->render() !!}--}}
    </div>
@stop

@section('scripts')
    <script>
        $(function() {
            $("#tags-table").DataTable({
            });
        });
    </script>
@stop