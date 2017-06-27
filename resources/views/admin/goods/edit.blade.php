<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="{{asset('style/css/pintuer.css')}}">
<link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">

    <form method="post" id="form" class="form-x" action="{{url('/admin/goods_add')}}" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>  
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="{{$goodsrow['goods_name']}}" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
        
      <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>分类标题：</label>
          </div>
          <div class="field">
            <select name="cid" class="input w50">
              <option value="">请选择分类</option>
              @foreach($goodtypes as $val)     
              <option <?php echo $val['id']==$goodsrow['typeid']? 'selected':'' ?> value="{{$val['id']}}">{{$val['name']}}</option>
              @endforeach
            </select>
            <div class="tips"></div>
          </div>
        </div>
        
        <div class="form-group">
        <div class="label">
          <label>产品编号(sn)：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="goods_sn" value="{{$goodsrow['goods_sn']}}" />
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>商城价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="shop_price" value="{{$goodsrow['shop_price']}}" />
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>市场价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="mareket_price" value="{{$goodsrow['mareket_price']}}" />
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>成本价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="cost_price" value="{{$goodsrow['cost_price']}}" />
        </div>
      </div>
      
      <div class="upload_class" style="width:1000px; height:auto;">
          <div class="form-group">
          <div class="label">
            <label>图片：</label>
          </div>
          <div class="field">
            @if($orimg)
                @foreach($orimg as $val)

                  <div class="col-xs-6 col-md-3">
                    <input type="file" >
                    <a href="#" class="thumbnail">
                      <img width="100" height="100" src="../../upload/{{$val}}" />
                    </a>
                    <a href="#"><img width="15" height="15" src="../../images/icon/del.jpg" id="srcId"></a>
                  </div>
                <!-- <div><img src="../../upload/{{$val}}" /></div>    -->
                @endforeach
            @endif
            <!-- <input type="file" id="original_img" name="original_img[]" class="input tips" style="width:25%; float:left;"   data-toggle="hover" data-place="right" data-image="" />
            <input type="button" class="button bg-blue margin-left" name="add" value="+"  style="float:left;">
            <div class="tipss">图片尺寸：500*500</div> -->   
          </div>
        </div>
      </div>
        <!-- <div class="form-group">
          <div class="label">
            <label>其他属性：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            首页 <input id="ishome"  type="checkbox" />
            推荐 <input id="isvouch"  type="checkbox" />
            置顶 <input id="istop"  type="checkbox" /> 
         
          </div>
        </div> -->
      </if>
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <script id="goods_remake" type="text/plain"  name="goods_remake" style="width:900px;height:200px;">{{$goodsrow['goods_remake']}}</script>
          <!-- <textarea class="input" name="note" style=" height:90px;"></textarea> -->
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
        <script id="goods_content" type="text/plain"  name="goods_content" style="width:900px;height:300px;">{{$goodsrow['goods_content']}}</script>
          <!-- <textarea name="content" class="input" style="height:450px; border:1px solid #ddd;"></textarea> -->
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="clear"></div>


      <div class="form-group">
        <div class="label">
          <label>销售数量：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sales_num" value="{{$goodsrow['sales_num']}}"  data-validate="number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>是否上架：</label>
        </div>
        <div class="field">
          <input type="radio" class="" <?php echo $goodsrow['is_on_sale']==1? 'checked':'' ?> value="1" name="is_on_sale"/>是
          <div class="tips"></div>
          <input type="radio" class="" <?php echo $goodsrow['is_on_sale']==0? 'checked':'' ?> value="0" name="is_on_sale"/>否
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>是否推荐：</label>
        </div>
        <div class="field">
          <input type="radio" class="" <?php echo $goodsrow['is_recommend']==1? 'checked':'' ?> name="is_recommend" value="1" />是
          <div class="tips"></div>
          <input type="radio" class="" <?php echo $goodsrow['is_recommend']==0? 'checked':'' ?> name="is_recommend" value="0" />否
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>是否新品：</label>
        </div>
        <div class="field">
          <input type="radio" class="" <?php echo $goodsrow['is_new']==1? 'checked':'' ?> name="is_new" value="1" />是
          <div class="tips"></div>
          <input type="radio" class="" <?php echo $goodsrow['is_new']==0? 'checked':'' ?> name="is_new" value="0" />否
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>是否热销：</label>
        </div>
        <div class="field">
          <input type="radio" class="" <?php echo  $goodsrow['is_hot']==1? 'checked':'' ?> name="is_hot" value="1" />是
          <div class="tips"></div>
          <input type="radio" class="" <?php echo $goodsrow['is_hot']==0? 'checked':'' ?> name="is_hot" value="0" />否
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>发布时间：</label>
        </div>
        <div class="field"> 
          <script src="{{asset('js/datejs/laydate.dev.js')}}"></script>
          <input type="text" class="laydate-icon input w50" id="datetime" name="datetime" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" value="{{$goodsrow['updated_at']}}"  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>库存：</label>
        </div>
        <div class="field">
          <input type="number" class="input w50" name="store_count" value="{{$goodsrow['store_count']}}"  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>点击次数：</label>
        </div>
        <div class="field">
          <input type="number" class="input w50" name="click_num" value="{{$goodsrow['click_num']}}" data-validate="member:只能为数字"  />
          <div class="tips"></div>
        </div>
      </div>
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
<script>
      $("#srcId").css({"position":"absolute","float":"right"});
      laydate({
            elem: '#datetime'
        });
      //实例化编辑器
      //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
      var ue = UE.getEditor('goods_remake');
      var ue = UE.getEditor('goods_content');

  $(function(){

      $('input[name=add]').click(function(){
          
        var html = "<div class='form-group'><div class='label'><label>图片：</label></div><div class='field'><input type='file' name='original_img[]' class='input tips' style='width:25%; float:left;'   data-toggle='hover' data-place='right' data-image='' /><input type='button' name='reduce' class='button bg-blue margin-left' value='-'  style='float:left;><div class='tipss'>图片尺寸：500*500</div></div></div>";
        $('.upload_class').append(html);

      });


     $(".upload_class").on('click','input[name=reduce]', function(){
          $(this).parent().parent().remove();
     });




  });
</script>