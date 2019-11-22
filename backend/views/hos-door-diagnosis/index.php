
<?php
use yii\widgets\LinkPager;
use yii\base\Object;
use yii\bootstrap\ActiveForm;
use common\utils\CommonFun;
use yii\helpers\Url;

use app\models\HosDoorDiagnosis;

$modelLabel = new \app\models\HosDoorDiagnosis();
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
                <?php ActiveForm::begin(['id' => 'hos-door-diagnosis-search-form', 'method'=>'get', 'options' => ['class' => 'form-inline'], 'action'=>Url::toRoute('hos-door-diagnosis/index')]); ?>     
                
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
              echo '<th onclick="orderby(\'is_register\', \'desc\')" '.CommonFun::sortClass($orderby, 'is_register').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('is_register').'</th>';
              echo '<th onclick="orderby(\'patient_source\', \'desc\')" '.CommonFun::sortClass($orderby, 'patient_source').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('patient_source').'</th>';
              echo '<th onclick="orderby(\'patient_name\', \'desc\')" '.CommonFun::sortClass($orderby, 'patient_name').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('patient_name').'</th>';
              echo '<th onclick="orderby(\'patient_card\', \'desc\')" '.CommonFun::sortClass($orderby, 'patient_card').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('patient_card').'</th>';
              echo '<th onclick="orderby(\'sex\', \'desc\')" '.CommonFun::sortClass($orderby, 'sex').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('sex').'</th>';
              echo '<th onclick="orderby(\'age\', \'desc\')" '.CommonFun::sortClass($orderby, 'age').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('age').'</th>';
              echo '<th onclick="orderby(\'income\', \'desc\')" '.CommonFun::sortClass($orderby, 'income').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('income').'</th>';
              echo '<th onclick="orderby(\'is_card\', \'desc\')" '.CommonFun::sortClass($orderby, 'is_card').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('is_card').'</th>';
              echo '<th onclick="orderby(\'craete_time\', \'desc\')" '.CommonFun::sortClass($orderby, 'craete_time').' tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" >'.$modelLabel->getAttributeLabel('craete_time').'</th>';
         
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
                echo '  <td>' . $model->is_register . '</td>';
                echo '  <td>' . $model->patient_source . '</td>';
                echo '  <td>' . $model->patient_name . '</td>';
                echo '  <td>' . $model->patient_card . '</td>';
                echo '  <td>' . $model->sex . '</td>';
                echo '  <td>' . $model->age . '</td>';
                echo '  <td>' . $model->income . '</td>';
                echo '  <td>' . $model->is_card . '</td>';
                echo '  <td>' . $model->craete_time . '</td>';
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
                <?php $form = ActiveForm::begin(["id" => "hos-door-diagnosis-form", "class"=>"form-horizontal", "action"=>Url::toRoute("hos-door-diagnosis/save")]); ?>                      
                 
          <input type="hidden" class="form-control" id="id" name="id" />

          <div id="doctor_name_div" class="form-group">
              <label for="doctor_name" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("doctor_name")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="doctor_name" name="HosDoorDiagnosis[doctor_name]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="is_register_div" class="form-group">
              <label for="is_register" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("is_register")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="is_register" name="HosDoorDiagnosis[is_register]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="patient_source_div" class="form-group">
              <label for="patient_source" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("patient_source")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="patient_source" name="HosDoorDiagnosis[patient_source]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="patient_name_div" class="form-group">
              <label for="patient_name" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("patient_name")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="patient_name" name="HosDoorDiagnosis[patient_name]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="patient_card_div" class="form-group">
              <label for="patient_card" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("patient_card")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="patient_card" name="HosDoorDiagnosis[patient_card]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="sex_div" class="form-group">
              <label for="sex" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("sex")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="sex" name="HosDoorDiagnosis[sex]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="age_div" class="form-group">
              <label for="age" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("age")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="age" name="HosDoorDiagnosis[age]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="income_div" class="form-group">
              <label for="income" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("income")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="income" name="HosDoorDiagnosis[income]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="is_card_div" class="form-group">
              <label for="is_card" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("is_card")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="is_card" name="HosDoorDiagnosis[is_card]" placeholder="必填" />
              </div>
              <div class="clearfix"></div>
          </div>

          <div id="craete_time_div" class="form-group">
              <label for="craete_time" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("craete_time")?></label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="craete_time" name="HosDoorDiagnosis[craete_time]" placeholder="必填" />
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
		$('#hos-door-diagnosis-search-form').submit();
	}
 function viewAction(id){
		initModel(id, 'view', 'fun');
	}

 function initEditSystemModule(data, type){
	if(type == 'create'){
    	        $("#id").val("");
        $("#doctor_name").val("");
        $("#is_register").val("");
        $("#patient_source").val("");
        $("#patient_name").val("");
        $("#patient_card").val("");
        $("#sex").val("");
        $("#age").val("");
        $("#income").val("");
        $("#is_card").val("");
        $("#craete_time").val("");
	
	}
	else{
    	        $("#id").val(data.id)
        $("#doctor_name").val(data.doctor_name)
        $("#is_register").val(data.is_register)
        $("#patient_source").val(data.patient_source)
        $("#patient_name").val(data.patient_name)
        $("#patient_card").val(data.patient_card)
        $("#sex").val(data.sex)
        $("#age").val(data.age)
        $("#income").val(data.income)
        $("#is_card").val(data.is_card)
        $("#craete_time").val(data.craete_time)
	}
	if(type == "view"){
      $("#id").attr({readonly:true,disabled:true});
      $("#doctor_name").attr({readonly:true,disabled:true});
      $("#is_register").attr({readonly:true,disabled:true});
      $("#patient_source").attr({readonly:true,disabled:true});
      $("#patient_name").attr({readonly:true,disabled:true});
      $("#patient_card").attr({readonly:true,disabled:true});
      $("#sex").attr({readonly:true,disabled:true});
      $("#age").attr({readonly:true,disabled:true});
      $("#income").attr({readonly:true,disabled:true});
      $("#is_card").attr({readonly:true,disabled:true});
      $("#craete_time").attr({readonly:true,disabled:true});
	$('#edit_dialog_ok').addClass('hidden');
	}
	else{
      $("#id").attr({readonly:false,disabled:false});
      $("#doctor_name").attr({readonly:false,disabled:false});
      $("#is_register").attr({readonly:false,disabled:false});
      $("#patient_source").attr({readonly:false,disabled:false});
      $("#patient_name").attr({readonly:false,disabled:false});
      $("#patient_card").attr({readonly:false,disabled:false});
      $("#sex").attr({readonly:false,disabled:false});
      $("#age").attr({readonly:false,disabled:false});
      $("#income").attr({readonly:false,disabled:false});
      $("#is_card").attr({readonly:false,disabled:false});
      $("#craete_time").attr({readonly:false,disabled:false});
		$('#edit_dialog_ok').removeClass('hidden');
		}
		$('#edit_dialog').modal('show');
}

function initModel(id, type, fun){
	
	$.ajax({
		   type: "GET",
		   url: "<?=Url::toRoute('hos-door-diagnosis/view')?>",
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
				   url: "<?=Url::toRoute('hos-door-diagnosis/delete')?>",
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
	$('#hos-door-diagnosis-form').submit();
});

$('#create_btn').click(function (e) {
    e.preventDefault();
    initEditSystemModule({}, 'create');
});

$('#delete_btn').click(function (e) {
    e.preventDefault();
    deleteAction('');
});

$('#hos-door-diagnosis-form').bind('submit', function(e) {
	e.preventDefault();
	var id = $("#id").val();
	var action = id == "" ? "<?=Url::toRoute('hos-door-diagnosis/create')?>" : "<?=Url::toRoute('hos-door-diagnosis/update')?>";
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