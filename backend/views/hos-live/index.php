
<?php
use yii\widgets\LinkPager;
use yii\base\Object;
use yii\bootstrap\ActiveForm;
use common\utils\CommonFun;
use yii\helpers\Url;

use app\models\HosLive;

$modelLabel = new \app\models\HosLive();
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
                <?php ActiveForm::begin(['id' => 'hos-live-search-form', 'method'=>'get', 'options' => ['class' => 'form-inline'], 'action'=>Url::toRoute('hos-live/index')]); ?>     
                
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
              echo '<th onclick="orderby(\'doctor_name\', \'desc\')" '.CommonFun::sortClass($orderby, 'doctor_name').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('doctor_name').'</th>';
              echo '<th onclick="orderby(\'building\', \'desc\')" '.CommonFun::sortClass($orderby, 'building').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('building').'</th>';
              echo '<th onclick="orderby(\'room_num\', \'desc\')" '.CommonFun::sortClass($orderby, 'room_num').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('room_num').'</th>';
              echo '<th onclick="orderby(\'patient_name\', \'desc\')" '.CommonFun::sortClass($orderby, 'patient_name').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('patient_name').'</th>';
              echo '<th onclick="orderby(\'patient_card\', \'desc\')" '.CommonFun::sortClass($orderby, 'patient_card').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('patient_card').'</th>';
              echo '<th onclick="orderby(\'live_days\', \'desc\')" '.CommonFun::sortClass($orderby, 'live_days').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('live_days').'</th>';
              echo '<th onclick="orderby(\'all_income\', \'desc\')" '.CommonFun::sortClass($orderby, 'all_income').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('all_income').'</th>';
              echo '<th onclick="orderby(\'is_card\', \'desc\')" '.CommonFun::sortClass($orderby, 'is_card').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('is_card').'</th>';
              echo '<th onclick="orderby(\'nurse_group\', \'desc\')" '.CommonFun::sortClass($orderby, 'nurse_group').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('nurse_group').'</th>';
              echo '<th onclick="orderby(\'create_time\', \'desc\')" '.CommonFun::sortClass($orderby, 'create_time').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('create_time').'</th>';
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
                echo '  <td>' . $model->doctor_name . '</td>';
                echo '  <td>' . $model->building . '</td>';
                echo '  <td>' . $model->room_num . '</td>';
                echo '  <td>' . $model->patient_name . '</td>';
                echo '  <td>' . $model->patient_card . '</td>';
                echo '  <td>' . $model->live_days . '</td>';
                echo '  <td>' . $model->all_income . '</td>';
                echo '  <td>' . $model->is_card . '</td>';
                echo '  <td>' . $model->nurse_group . '</td>';
                echo '  <td>' . $model->create_time . '</td>';
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
                <?php $form = ActiveForm::begin(["id" => "hos-live-form", "class"=>"form-horizontal", "action"=>Url::toRoute("hos-live/save")]); ?>                      
                 
          <input type="hidden" class="form-control" id="id" name="id" />

          <div id="doctor_name_div" class="form-group">
              <label for="doctor_name" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("doctor_name")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="doctor_name" name="HosLive[doctor_name]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="building_div" class="form-group">
              <label for="building" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("building")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="building" name="HosLive[building]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="room_num_div" class="form-group">
              <label for="room_num" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("room_num")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="room_num" name="HosLive[room_num]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="patient_name_div" class="form-group">
              <label for="patient_name" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("patient_name")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="patient_name" name="HosLive[patient_name]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="patient_card_div" class="form-group">
              <label for="patient_card" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("patient_card")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="patient_card" name="HosLive[patient_card]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="live_days_div" class="form-group">
              <label for="live_days" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("live_days")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="live_days" name="HosLive[live_days]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="all_income_div" class="form-group">
              <label for="all_income" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("all_income")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="all_income" name="HosLive[all_income]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="is_card_div" class="form-group">
              <label for="is_card" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("is_card")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="is_card" name="HosLive[is_card]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="nurse_group_div" class="form-group">
              <label for="nurse_group" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("nurse_group")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="nurse_group" name="HosLive[nurse_group]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="create_time_div" class="form-group">
              <label for="create_time" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("create_time")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="create_time" name="HosLive[create_time]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="update_time_div" class="form-group">
              <label for="update_time" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("update_time")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="update_time" name="HosLive[update_time]" placeholder="必填" />
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
		$('#hos-live-search-form').submit();
	}
 function viewAction(id){
		initModel(id, 'view', 'fun');
	}

 function initEditSystemModule(data, type){
	if(type == 'create'){
    	        $("#id").val("");
        $("#doctor_name").val("");
        $("#building").val("");
        $("#room_num").val("");
        $("#patient_name").val("");
        $("#patient_card").val("");
        $("#live_days").val("");
        $("#all_income").val("");
        $("#is_card").val("");
        $("#nurse_group").val("");
        $("#create_time").val("");
        $("#update_time").val("");
	
	}
	else{
    	        $("#id").val(data.id)
        $("#doctor_name").val(data.doctor_name)
        $("#building").val(data.building)
        $("#room_num").val(data.room_num)
        $("#patient_name").val(data.patient_name)
        $("#patient_card").val(data.patient_card)
        $("#live_days").val(data.live_days)
        $("#all_income").val(data.all_income)
        $("#is_card").val(data.is_card)
        $("#nurse_group").val(data.nurse_group)
        $("#create_time").val(data.create_time)
        $("#update_time").val(data.update_time)
	}
	if(type == "view"){
      $("#id").attr({readonly:true,disabled:true});
      $("#doctor_name").attr({readonly:true,disabled:true});
      $("#building").attr({readonly:true,disabled:true});
      $("#room_num").attr({readonly:true,disabled:true});
      $("#patient_name").attr({readonly:true,disabled:true});
      $("#patient_card").attr({readonly:true,disabled:true});
      $("#live_days").attr({readonly:true,disabled:true});
      $("#all_income").attr({readonly:true,disabled:true});
      $("#is_card").attr({readonly:true,disabled:true});
      $("#nurse_group").attr({readonly:true,disabled:true});
      $("#create_time").attr({readonly:true,disabled:true});
      $("#update_time").attr({readonly:true,disabled:true});
	$('#edit_dialog_ok').addClass('hidden');
	}
	else{
      $("#id").attr({readonly:false,disabled:false});
      $("#doctor_name").attr({readonly:false,disabled:false});
      $("#building").attr({readonly:false,disabled:false});
      $("#room_num").attr({readonly:false,disabled:false});
      $("#patient_name").attr({readonly:false,disabled:false});
      $("#patient_card").attr({readonly:false,disabled:false});
      $("#live_days").attr({readonly:false,disabled:false});
      $("#all_income").attr({readonly:false,disabled:false});
      $("#is_card").attr({readonly:false,disabled:false});
      $("#nurse_group").attr({readonly:false,disabled:false});
      $("#create_time").attr({readonly:false,disabled:false});
      $("#update_time").attr({readonly:false,disabled:false});
		$('#edit_dialog_ok').removeClass('hidden');
		}
		$('#edit_dialog').modal('show');
}

function initModel(id, type, fun){
	
	$.ajax({
		   type: "GET",
		   url: "<?=Url::toRoute('hos-live/view')?>",
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
				   url: "<?=Url::toRoute('hos-live/delete')?>",
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
	$('#hos-live-form').submit();
});

$('#create_btn').click(function (e) {
    e.preventDefault();
    initEditSystemModule({}, 'create');
});

$('#delete_btn').click(function (e) {
    e.preventDefault();
    deleteAction('');
});

$('#hos-live-form').bind('submit', function(e) {
	e.preventDefault();
	var id = $("#id").val();
	var action = id == "" ? "<?=Url::toRoute('hos-live/create')?>" : "<?=Url::toRoute('hos-live/update')?>";
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