<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="{{asset('style/css/pintuer.css')}}">
<link rel="stylesheet" href="{{asset('style/css/admin.css')}}">
<script src="{{asset('style/js/jquery.js')}}"></script>
<script src="{{asset('style/js/pintuer.js')}}"></script>
<!-- ueditor -->
<script src="{{asset('./editor/ueditor.config.js')}}"></script>
<script src="{{asset('./editor/ueditor.all.min.js')}}"></script>
<!-- //ueditor -->
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>订单发货</strong></div>
  <div class="body-content">

    <form method="post" id="form" class="form-x" action="" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>  
    
      <if condition="$iscid eq 1">

        <div class="form-group">
        <div class="label">
          <label>快递:</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="goods_sn" value=""/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>快递单号:</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="shop_price" value=""/>
        </div>
      </div>

        
      <div class="clear"></div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html>
