<ul>
    <li >真实姓名&nbsp;</li>
    <li>{{$real_name}}</li>
</ul>
<ul>
    <li >国籍&nbsp;</li>
    <li>{{$country}}</li>
</ul>
<?php $type_arr = ['1'=>'身份证','2'=>'护照','3'=>'驾照']?>
<ul>
    <li >证件类型&nbsp;</li>
    <li>{{$type_arr[$type] or ''}}</li>
</ul>
<ul>
    <li >证件号&nbsp;</li>
    <li>{{$idcard}}</li>
</ul>
<ul>
    <li >住址&nbsp;</li>
    <li>{{$address}}</li>
</ul>
<ul>
    <li >邮箱&nbsp;</li>
    <li>{{$email}}</li>
</ul>
<ul>
    <li >手机号码&nbsp;</li>
    <li>{{$mobile}}</li>
</ul>
<ul>
    <li >银行帐号&nbsp;</li>
    <li>{{$bankaccount}}</li>
</ul>

