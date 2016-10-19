<div class="form-group">
    <label for="title" class="col-md-3 control-label">
        类名
    </label>
    <div class="col-md-8">
        <input type="text" class="form-control" name="title" id="title" value="{{ $title }}">
    </div>
</div>

<div class="form-group">
    <label for="father_id" class="col-md-3 control-label">
        上级分类
    </label>
    <div class="col-md-5">
        <select class="form-control" name="father_id" id="father_id">
            <option value="0">顶级分类</option>
            @foreach($topCategories as $tc)
                <option value="{{$tc->id}}" @if ($father_id == $tc->id) selected @endif>{{$tc->title}}</option>
            @endforeach
        </select>
        {{--<input type="text" class="form-control" name="subtitle" id="subtitle" value="{{ $subtitle }}">--}}
    </div>
</div>

{{--<div class="form-group">--}}
    {{--<label for="meta_description" class="col-md-3 control-label">--}}
        {{--Meta Description--}}
    {{--</label>--}}
    {{--<div class="col-md-8">--}}
        {{--<textarea class="form-control" id="meta_description" name="meta_description" rows="3">--}}
            {{--{{ $meta_description }}--}}
        {{--</textarea>--}}
    {{--</div>--}}
{{--</div>--}}


<div class="form-group">
    <label for="is_active" class="col-md-3 control-label">
        状态
    </label>
    <div class="col-md-7">
        <label class="radio-inline">
            <input type="radio" name="is_active"
                   @if ($is_active)
                   checked="checked"
                   @endif
                   value="1">
            启用
        </label>
        <label class="radio-inline">
            <input type="radio" name="is_active" id="is_active"
                   @if (! $is_active)
                   checked="checked"
                   @endif
                   value="0">
            未启用
        </label>
    </div>
</div>