
<?php
use yii\widgets\LinkPager;
use yii\base\Object;
use yii\bootstrap\ActiveForm;
use common\utils\CommonFun;
use yii\helpers\Url;

use app\models\HosMedicine;

$modelLabel = new \app\models\HosMedicine();
?>

<?php $this->beginBlock('header');  ?>
<!-- <head></head>中代码块 -->
<?php $this->endBlock(); ?>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
      
        <div class="box-header">
          <h3 class="box-title">数据列表</h3>
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <button id="create_btn" type="button" class="btn btn-xs btn-primary">添&nbsp;&emsp;加</button>
        			|
        		<button id="delete_btn" type="button" class="btn btn-xs btn-danger">批量删除</button>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap table-responsive">
            <!-- row start search-->
          	<div class="row">
          	<div class="col-sm-12">
                <?php ActiveForm::begin(['id' => 'hos-medicine-search-form', 'method'=>'get', 'options' => ['class' => 'form-inline'], 'action'=>Url::toRoute('hos-medicine/index')]); ?>     
                
                  <div class="form-group" style="margin: 5px;">
                      <label><?=$modelLabel->getAttributeLabel('id')?>:</label>
                      <input type="text" class="form-control" id="query[id]" name="query[id]"  value="<?=isset($query["id"]) ? $query["id"] : "" ?>">
                  </div>
              <div class="form-group">
              	<a onclick="searchAction()" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>搜索</a>
           	  </div>
               <?php ActiveForm::end(); ?> 
            </div>
          	</div>
          	<!-- row end search -->
          	
          	<!-- row start -->
          	<div class="row">
          	<div class="col-sm-12">
          	<table id="data_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="data_table_info">
            <thead class="text-nowrap">
            <tr role="row">
            
            <?php 
              $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : '';
		      echo '<th><input id="data_table_check" type="checkbox"></th>';
              echo '<th onclick="orderby(\'id\', \'desc\')" '.CommonFun::sortClass($orderby, 'id').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('id').'</th>';
              echo '<th onclick="orderby(\'medicine_name\', \'desc\')" '.CommonFun::sortClass($orderby, 'medicine_name').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('medicine_name').'</th>';
              echo '<th onclick="orderby(\'medicine_type\', \'desc\')" '.CommonFun::sortClass($orderby, 'medicine_type').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('medicine_type').'</th>';
              echo '<th onclick="orderby(\'medicine_num\', \'desc\')" '.CommonFun::sortClass($orderby, 'medicine_num').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('medicine_num').'</th>';
              echo '<th onclick="orderby(\'medicine_no\', \'desc\')" '.CommonFun::sortClass($orderby, 'medicine_no').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('medicine_no').'</th>';
              echo '<th onclick="orderby(\'medicine_create_time\', \'desc\')" '.CommonFun::sortClass($orderby, 'medicine_create_time').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('medicine_create_time').'</th>';
              echo '<th onclick="orderby(\'company\', \'desc\')" '.CommonFun::sortClass($orderby, 'company').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('company').'</th>';
              echo '<th onclick="orderby(\'address\', \'desc\')" '.CommonFun::sortClass($orderby, 'address').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('address').'</th>';
              echo '<th onclick="orderby(\'medicine_weight\', \'desc\')" '.CommonFun::sortClass($orderby, 'medicine_weight').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('medicine_weight').'</th>';
              echo '<th onclick="orderby(\'is_suppot_card\', \'desc\')" '.CommonFun::sortClass($orderby, 'is_suppot_card').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('is_suppot_card').'</th>';
              echo '<th onclick="orderby(\'update_time\', \'desc\')" '.CommonFun::sortClass($orderby, 'update_time').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('update_time').'</th>';
         
			?>
	
            <th tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >操作</th>
            </tr>
            </thead>
            <tbody>
            
            <?php
            foreach ($models as $model) {
                echo '<tr id="rowid_' . $model->id . '">';
                echo '  <td><label><input type="checkbox" value="' . $model->id . '"></label></td>';
                echo '  <td>' . $model->id . '</td>';
                echo '  <td>' . $model->medicine_name . '</td>';
                echo '  <td>' . $model->medicine_type . '</td>';
                echo '  <td>' . $model->medicine_num . '</td>';
                echo '  <td>' . $model->medicine_no . '</td>';
                echo '  <td>' . $model->medicine_create_time . '</td>';
                echo '  <td>' . $model->company . '</td>';
                echo '  <td>' . $model->address . '</td>';
                echo '  <td>' . $model->medicine_weight . '</td>';
                echo '  <td>' . $model->is_suppot_card . '</td>';
                echo '  <td>' . $model->update_time . '</td>';
                echo '  <td class="center">';
                echo '      <a id="view_btn" onclick="viewAction(' . $model->id . ')" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>查看</a>';
                echo '      <a id="edit_btn" onclick="editAction(' . $model->id . ')" class="btn btn-primary btn-sm" href="#"> <i class="glyphicon glyphicon-edit icon-white"></i>修改</a>';
                echo '      <a id="delete_btn" onclick="deleteAction(' . $model->id . ')" class="btn btn-danger btn-sm" href="#"> <i class="glyphicon glyphicon-trash icon-white"></i>删除</a>';
                echo '  </td>';
                echo '</tr>';
            }
            
            ?>
            
           
           
            </tbody>
            <!-- <tfoot></tfoot> -->
          </table>
          </div>
          </div>
          <!-- row end -->
          
          <!-- row start -->
          <div class="row">
          	<div class="col-sm-5">
            	<div class="dataTables_info" id="data_table_info" role="status" aria-live="polite">
            		<div class="infos">
            		从<?= $pages->getPage() * $pages->getPageSize() + 1 ?>            		到 <?= ($pageCount = ($pages->getPage() + 1) * $pages->getPageSize()) < $pages->totalCount ?  $pageCount : $pages->totalCount?>            		 共 <?= $pages->totalCount?> 条记录</div>
            	</div>
            </div>
          	<div class="col-sm-7">
              	<div class="dataTables_paginate paging_simple_numbers" id="data_table_paginate">
              	<?= LinkPager::widget([
              	    'pagination' => $pages,
              	    'nextPageLabel' => '»',
              	    'prevPageLabel' => '«',
              	    'firstPageLabel' => '首页',
              	    'lastPageLabel' => '尾页',
              	]); ?>	
              	
              	</div>
          	</div>
		  </div>
		  <!-- row end -->
        </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<div class="modal fade" id="edit_dialog" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
                <?php $form = ActiveForm::begin(["id" => "hos-medicine-form", "class"=>"form-horizontal", "action"=>Url::toRoute("hos-medicine/save")]); ?>                      
                 
          <input type="hidden" class="form-control" id="id" name="id" />

          <div id="medicine_name_div" class="form-group">
              <label for="medicine_name" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("medicine_name")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="medicine_name" name="HosMedicine[medicine_name]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="medicine_type_div" class="form-group">
              <label for="medicine_type" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("medicine_type")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="medicine_type" name="HosMedicine[medicine_type]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="medicine_num_div" class="form-group">
              <label for="medicine_num" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("medicine_num")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="medicine_num" name="HosMedicine[medicine_num]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="medicine_no_div" class="form-group">
              <label for="medicine_no" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("medicine_no")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="medicine_no" name="HosMedicine[medicine_no]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="medicine_create_time_div" class="form-group">
              <label for="medicine_create_time" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("medicine_create_time")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="medicine_create_time" name="HosMedicine[medicine_create_time]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="company_div" class="form-group">
              <label for="company" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("company")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="company" name="HosMedicine[company]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="address_div" class="form-group">
              <label for="address" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("address")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="address" name="HosMedicine[address]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="medicine_weight_div" class="form-group">
              <label for="medicine_weight" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("medicine_weight")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="medicine_weight" name="HosMedicine[medicine_weight]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="is_suppot_card_div" class="form-group">
              <label for="is_suppot_card" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("is_suppot_card")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="is_suppot_card" name="HosMedicine[is_suppot_card]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="update_time_div" class="form-group">
              <label for="update_time" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("update_time")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="update_time" name="HosMedicine[update_time]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>
                    

			<?php ActiveForm::end(); ?>          
                </div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default" data-dismiss="modal">关闭</a> <a
					id="edit_dialog_ok" href="#" class="btn btn-primary">确定</a>
			</div>
		</div>
	</div>
</div>
<?php $this->beginBlock('footer');  ?>
<!-- <body></body>后代码块 -->
 <script>
function orderby(field, op){
	 var url = window.location.search;
	 var optemp = field + " desc";
	 if(url.indexOf('orderby') != -1){
		 url = url.replace(/orderby=([^&?]*)/ig,  function($0, $1){ 
			 var optemp = field + " desc";
			 optemp = decodeURI($1) != optemp ? optemp : field + " asc";
			 return "orderby=" + optemp;
		   }); 
	 }
	 else{
		 if(url.indexOf('?') != -1){
			 url = url + "&orderby=" + encodeURI(optemp);
		 }
		 else{
			 url = url + "?orderby=" + encodeURI(optemp);
		 }
	 }
	 window.location.href=url; 
 }
 function searchAction(){
		$('#hos-medicine-search-form').submit();
	}
 function viewAction(id){
		initModel(id, 'view', 'fun');
	}

 function initEditSystemModule(data, type){
	if(type == 'create'){
    	        $("#id").val("");
        $("#medicine_name").val("");
        $("#medicine_type").val("");
        $("#medicine_num").val("");
        $("#medicine_no").val("");
        $("#medicine_create_time").val("");
        $("#company").val("");
        $("#address").val("");
        $("#medicine_weight").val("");
        $("#is_suppot_card").val("");
        $("#update_time").val("");
	
	}
	else{
    	        $("#id").val(data.id)
        $("#medicine_name").val(data.medicine_name)
        $("#medicine_type").val(data.medicine_type)
        $("#medicine_num").val(data.medicine_num)
        $("#medicine_no").val(data.medicine_no)
        $("#medicine_create_time").val(data.medicine_create_time)
        $("#company").val(data.company)
        $("#address").val(data.address)
        $("#medicine_weight").val(data.medicine_weight)
        $("#is_suppot_card").val(data.is_suppot_card)
        $("#update_time").val(data.update_time)
	}
	if(type == "view"){
      $("#id").attr({readonly:true,disabled:true});
      $("#medicine_name").attr({readonly:true,disabled:true});
      $("#medicine_type").attr({readonly:true,disabled:true});
      $("#medicine_num").attr({readonly:true,disabled:true});
      $("#medicine_no").attr({readonly:true,disabled:true});
      $("#medicine_create_time").attr({readonly:true,disabled:true});
      $("#company").attr({readonly:true,disabled:true});
      $("#address").attr({readonly:true,disabled:true});
      $("#medicine_weight").attr({readonly:true,disabled:true});
      $("#is_suppot_card").attr({readonly:true,disabled:true});
      $("#update_time").attr({readonly:true,disabled:true});
	$('#edit_dialog_ok').addClass('hidden');
	}
	else{
      $("#id").attr({readonly:false,disabled:false});
      $("#medicine_name").attr({readonly:false,disabled:false});
      $("#medicine_type").attr({readonly:false,disabled:false});
      $("#medicine_num").attr({readonly:false,disabled:false});
      $("#medicine_no").attr({readonly:false,disabled:false});
      $("#medicine_create_time").attr({readonly:false,disabled:false});
      $("#company").attr({readonly:false,disabled:false});
      $("#address").attr({readonly:false,disabled:false});
      $("#medicine_weight").attr({readonly:false,disabled:false});
      $("#is_suppot_card").attr({readonly:false,disabled:false});
      $("#update_time").attr({readonly:false,disabled:false});
		$('#edit_dialog_ok').removeClass('hidden');
		}
		$('#edit_dialog').modal('show');
}

function initModel(id, type, fun){
	
	$.ajax({
		   type: "GET",
		   url: "<?=Url::toRoute('hos-medicine/view')?>",
		   data: {"id":id},
		   cache: false,
		   dataType:"json",
		   error: function (xmlHttpRequest, textStatus, errorThrown) {
			    alert("出错了，" + textStatus);
			},
		   success: function(data){
			   initEditSystemModule(data, type);

			   ////////////////////////////////////////
   		   }
		});
}
	
function editAction(id){
	initModel(id, 'edit');
}

function deleteAction(id){
	var ids = [];
	if(!!id == true){
		ids[0] = id;
	}
	else{
		var checkboxs = $('#data_table :checked');
	    if(checkboxs.size() > 0){
	        var c = 0;
	        for(i = 0; i < checkboxs.size(); i++){
	            var id = checkboxs.eq(i).val();
	            if(id != ""){
	            	ids[c++] = id;
	            }
	        }
	    }
	}
	if(ids.length > 0){
		admin_tool.confirm('请确认是否删除', function(){
		    $.ajax({
				   type: "GET",
				   url: "<?=Url::toRoute('hos-medicine/delete')?>",
				   data: {"ids":ids},
				   cache: false,
				   dataType:"json",
				   error: function (xmlHttpRequest, textStatus, errorThrown) {
					    admin_tool.alert('msg_info', '出错了，' + textStatus, 'warning');
					},
				   success: function(data){
					   for(i = 0; i < ids.length; i++){
						   $('#rowid_' + ids[i]).remove();
					   }
					   admin_tool.alert('msg_info', '删除成功', 'success');
					   window.location.reload();
				   }
				});
		});
	}
	else{
		admin_tool.alert('msg_info', '请先选择要删除的数据', 'warning');
	}
    
}

function getSelectedIdValues(formId)
{
	var value="";
	$( formId + " :checked").each(function(i)
	{
		if(!this.checked)
		{
			return true;
		}
		value += this.value;
		if(i != $("input[name='id']").size()-1)
		{
			value += ",";
		}
	 });
	return value;
}

$('#edit_dialog_ok').click(function (e) {
    e.preventDefault();
	$('#hos-medicine-form').submit();
});

$('#create_btn').click(function (e) {
    e.preventDefault();
    initEditSystemModule({}, 'create');
});

$('#delete_btn').click(function (e) {
    e.preventDefault();
    deleteAction('');
});

$('#hos-medicine-form').bind('submit', function(e) {
	e.preventDefault();
	var id = $("#id").val();
	var action = id == "" ? "<?=Url::toRoute('hos-medicine/create')?>" : "<?=Url::toRoute('hos-medicine/update')?>";
    $(this).ajaxSubmit({
    	type: "post",
    	dataType:"json",
    	url: action,
    	success: function(value) 
    	{
        	if(value.errno == 0){
        		$('#edit_dialog').modal('hide');
        		admin_tool.alert('msg_info', '添加成功', 'success');
        		window.location.reload();
        	}
        	else{
            	var json = value.data;
        		for(var key in json){
        			$('#' + key).attr({'data-placement':'bottom', 'data-content':json[key], 'data-toggle':'popover'}).addClass('popover-show').popover('show');
        			
        		}
        	}

    	}
    });
});

</script>
<?php $this->endBlock(); ?>