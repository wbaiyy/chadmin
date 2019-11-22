
<?php
use yii\widgets\LinkPager;
use yii\base\Object;
use yii\bootstrap\ActiveForm;
use common\utils\CommonFun;
use yii\helpers\Url;

use app\models\HosEquipment;

$modelLabel = new \app\models\HosEquipment();
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
                <?php ActiveForm::begin(['id' => 'hos-equipment-search-form', 'method'=>'get', 'options' => ['class' => 'form-inline'], 'action'=>Url::toRoute('hos-equipment/index')]); ?>     
                
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
              echo '<th onclick="orderby(\'department_name\', \'desc\')" '.CommonFun::sortClass($orderby, 'department_name').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('department_name').'</th>';
              echo '<th onclick="orderby(\'equipment_name\', \'desc\')" '.CommonFun::sortClass($orderby, 'equipment_name').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('equipment_name').'</th>';
              echo '<th onclick="orderby(\'equipment_type\', \'desc\')" '.CommonFun::sortClass($orderby, 'equipment_type').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('equipment_type').'</th>';
              echo '<th onclick="orderby(\'equipment_status\', \'desc\')" '.CommonFun::sortClass($orderby, 'equipment_status').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('equipment_status').'</th>';
              echo '<th onclick="orderby(\'equipment_num\', \'desc\')" '.CommonFun::sortClass($orderby, 'equipment_num').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('equipment_num').'</th>';
              echo '<th onclick="orderby(\'address\', \'desc\')" '.CommonFun::sortClass($orderby, 'address').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('address').'</th>';
              echo '<th onclick="orderby(\'company\', \'desc\')" '.CommonFun::sortClass($orderby, 'company').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('company').'</th>';
              echo '<th onclick="orderby(\'belong_person\', \'desc\')" '.CommonFun::sortClass($orderby, 'belong_person').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('belong_person').'</th>';
              echo '<th onclick="orderby(\'charge_person\', \'desc\')" '.CommonFun::sortClass($orderby, 'charge_person').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('charge_person').'</th>';
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
                echo '  <td>' . $model->department_name . '</td>';
                echo '  <td>' . $model->equipment_name . '</td>';
                echo '  <td>' . $model->equipment_type . '</td>';
                echo '  <td>' . $model->equipment_status . '</td>';
                echo '  <td>' . $model->equipment_num . '</td>';
                echo '  <td>' . $model->address . '</td>';
                echo '  <td>' . $model->company . '</td>';
                echo '  <td>' . $model->belong_person . '</td>';
                echo '  <td>' . $model->charge_person . '</td>';
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
                <?php $form = ActiveForm::begin(["id" => "hos-equipment-form", "class"=>"form-horizontal", "action"=>Url::toRoute("hos-equipment/save")]); ?>                      
                 
          <input type="hidden" class="form-control" id="id" name="id" />

          <div id="department_name_div" class="form-group">
              <label for="department_name" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("department_name")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="department_name" name="HosEquipment[department_name]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="equipment_name_div" class="form-group">
              <label for="equipment_name" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("equipment_name")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="equipment_name" name="HosEquipment[equipment_name]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="equipment_type_div" class="form-group">
              <label for="equipment_type" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("equipment_type")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="equipment_type" name="HosEquipment[equipment_type]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="equipment_status_div" class="form-group">
              <label for="equipment_status" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("equipment_status")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="equipment_status" name="HosEquipment[equipment_status]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="equipment_num_div" class="form-group">
              <label for="equipment_num" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("equipment_num")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="equipment_num" name="HosEquipment[equipment_num]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="address_div" class="form-group">
              <label for="address" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("address")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="address" name="HosEquipment[address]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="company_div" class="form-group">
              <label for="company" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("company")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="company" name="HosEquipment[company]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="belong_person_div" class="form-group">
              <label for="belong_person" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("belong_person")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="belong_person" name="HosEquipment[belong_person]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="charge_person_div" class="form-group">
              <label for="charge_person" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("charge_person")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="charge_person" name="HosEquipment[charge_person]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="update_time_div" class="form-group">
              <label for="update_time" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("update_time")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="update_time" name="HosEquipment[update_time]" placeholder="必填" />
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
		$('#hos-equipment-search-form').submit();
	}
 function viewAction(id){
		initModel(id, 'view', 'fun');
	}

 function initEditSystemModule(data, type){
	if(type == 'create'){
    	        $("#id").val("");
        $("#department_name").val("");
        $("#equipment_name").val("");
        $("#equipment_type").val("");
        $("#equipment_status").val("");
        $("#equipment_num").val("");
        $("#address").val("");
        $("#company").val("");
        $("#belong_person").val("");
        $("#charge_person").val("");
        $("#update_time").val("");
	
	}
	else{
    	        $("#id").val(data.id)
        $("#department_name").val(data.department_name)
        $("#equipment_name").val(data.equipment_name)
        $("#equipment_type").val(data.equipment_type)
        $("#equipment_status").val(data.equipment_status)
        $("#equipment_num").val(data.equipment_num)
        $("#address").val(data.address)
        $("#company").val(data.company)
        $("#belong_person").val(data.belong_person)
        $("#charge_person").val(data.charge_person)
        $("#update_time").val(data.update_time)
	}
	if(type == "view"){
      $("#id").attr({readonly:true,disabled:true});
      $("#department_name").attr({readonly:true,disabled:true});
      $("#equipment_name").attr({readonly:true,disabled:true});
      $("#equipment_type").attr({readonly:true,disabled:true});
      $("#equipment_status").attr({readonly:true,disabled:true});
      $("#equipment_num").attr({readonly:true,disabled:true});
      $("#address").attr({readonly:true,disabled:true});
      $("#company").attr({readonly:true,disabled:true});
      $("#belong_person").attr({readonly:true,disabled:true});
      $("#charge_person").attr({readonly:true,disabled:true});
      $("#update_time").attr({readonly:true,disabled:true});
	$('#edit_dialog_ok').addClass('hidden');
	}
	else{
      $("#id").attr({readonly:false,disabled:false});
      $("#department_name").attr({readonly:false,disabled:false});
      $("#equipment_name").attr({readonly:false,disabled:false});
      $("#equipment_type").attr({readonly:false,disabled:false});
      $("#equipment_status").attr({readonly:false,disabled:false});
      $("#equipment_num").attr({readonly:false,disabled:false});
      $("#address").attr({readonly:false,disabled:false});
      $("#company").attr({readonly:false,disabled:false});
      $("#belong_person").attr({readonly:false,disabled:false});
      $("#charge_person").attr({readonly:false,disabled:false});
      $("#update_time").attr({readonly:false,disabled:false});
		$('#edit_dialog_ok').removeClass('hidden');
		}
		$('#edit_dialog').modal('show');
}

function initModel(id, type, fun){
	
	$.ajax({
		   type: "GET",
		   url: "<?=Url::toRoute('hos-equipment/view')?>",
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
				   url: "<?=Url::toRoute('hos-equipment/delete')?>",
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
	$('#hos-equipment-form').submit();
});

$('#create_btn').click(function (e) {
    e.preventDefault();
    initEditSystemModule({}, 'create');
});

$('#delete_btn').click(function (e) {
    e.preventDefault();
    deleteAction('');
});

$('#hos-equipment-form').bind('submit', function(e) {
	e.preventDefault();
	var id = $("#id").val();
	var action = id == "" ? "<?=Url::toRoute('hos-equipment/create')?>" : "<?=Url::toRoute('hos-equipment/update')?>";
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