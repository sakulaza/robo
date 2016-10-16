<div id="top">
    <div id="t-language" class="language-select">
        <div class="label">
            语言:
        </div>

        <div id="tl-select" class="tl-select-cs">
            <div class="tl-item">
                <i class="tl_main_select flags flag-cs"></i>
                <span>中文简体</span>
                <i class="fa fa-sort"></i>
            </div>
        </div>
        <div id="tl-list">
            <a href="http://www.GoldMany.com/" class="tl-item" title="English">
                <i class="flags flag-en"></i>
                <span>English</span>
            </a>
            <a href="http://www.GoldMany.tw/" class="tl-item" title="中文繁體">
                <i class="flags flag-tc"></i>
                <span>中文繁體</span>
            </a>
        </div>
    </div>
    <div id="t-user" class="user-lk-top-panel">
        @if(empty(Auth::user()))
            <a href="/login"  class="lk-top-link">
                <i class="fa fa-lock"></i>
                <span>登陆会员中心</span>
            </a>
            <a href="/register"  class="lk-top-link">
                <i class="fa fa-pencil-square-o"></i>
                <span>注册</span>
            </a>
        @else
            <a id="tu-login" class="lk-top-link">
                <i class="fa fa-lock"></i>
                <span>你好 {{Auth::user()->name}}</span>
            </a>
            <a href="/logout"  class="lk-top-link">
                <i class="fa fa-pencil-square-o"></i>
                <span>退出</span>
            </a>
        @endif

        {{--<form id="tu-auth" method="post" action="https://my.cn.GoldMany.com/cs/login/">--}}
            {{--<p>--}}
                {{--<input id="tua-email" name="login[email]" placeholder="E-mail" class="fText" value="">--}}
                {{--<input type="password" name="login[password]" id="tua-password" placeholder="密码" class="fText"--}}
                       {{--value="">--}}
                {{--<input name="login[from_site]" type="hidden" value="1">--}}
                {{--<span class="fSubmit"><span>登录</span></span>--}}
                {{--<button type="submit" class="fSubmit" id="tua-submit" style="display: none;">登录</button>--}}
            {{--</p>--}}
            {{--<p>--}}
                {{--<a href="https://my.cn.GoldMany.com/cs/remind/">忘记密码?</a>--}}
            {{--</p>--}}
        {{--</form>--}}


    </div>

    <form id="t-search" action="http://cn.GoldMany.com/search/" method="get">
        <p>
            <input id="ts-search" name="q" class="fText" placeholder="搜索?..." value="">
                {{--<span class="fSubmit likeBigButtonLoader button-submit">--}}
                    {{--<span class="button-text"><span>搜索</span></span>--}}
                    {{--<div class="button-loader-wrapper">--}}
                        {{--<span class="button-loader"></span>--}}
                        {{--<span class="button-loader-text"></span>--}}
                    {{--</div>--}}
                {{--</span>--}}
            <button type="submit" class="fSubmit likeBigButtonLoader button-submit" id="ts-submit" style="display: none;">
                <span class="button-text">搜索</span>
                <div class="button-loader-wrapper">
                    <span class="button-loader"></span><span class="button-loader-text"></span>
                </div>
            </button>
            <a href="/map/" id="ts-sitemap" class="top-sitemap">
                <i class="fa fa-sitemap"></i>网站地图
            </a>
        </p>
    </form>
</div>