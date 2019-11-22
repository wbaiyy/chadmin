<?php
namespace app\models;

use Yii;

/**
 * This is the model class for table "hos_live".
 *
 * @property string $id
 * @property string $doctor_name
 * @property integer $building
 * @property integer $room_num
 * @property string $patient_name
 * @property string $patient_card
 * @property integer $live_days
 * @property string $all_income
 * @property integer $is_card
 * @property string $nurse_group
 * @property string $create_time
 * @property string $update_time
 */
class HosLive extends \backend\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hos_live';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_num', 'live_days'], 'integer'],
            [['all_income'], 'number'],
            [['create_time', 'update_time'], 'safe'],
            [['doctor_name'], 'string', 'max' => 32],
            [['building'], 'string', 'max' => 2],
            [['patient_name', 'nurse_group'], 'string', 'max' => 255],
            [['patient_card'], 'string', 'max' => 20],
            [['is_card'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'building' => '住院楼栋',
            'room_num' => '住院房号',
            'patient_name' => '病人姓名',
            'patient_card' => '病人身份证',
            'live_days' => '住院天数',
            'doctor_name' => '医生',
            'all_income' => '总费用',
            'is_card' => '是否使用社保',
            'nurse_group' => '所属护士组',
            'create_time' => '创建日期',
            'update_time' => '更新日期',
        ];
    }

    /**
     * @inheritdoc
     * @return HosLiveQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HosLiveQuery(get_called_class());
    }

  /**
     * 返回数据库字段信息，仅在生成CRUD时使用，如不需要生成CRUD，请注释或删除该getTableColumnInfo()代码
     * COLUMN_COMMENT可用key如下:
     * label - 显示的label
     * inputType 控件类型, 暂时只支持text,hidden  // select,checkbox,radio,file,password,
     * isEdit   是否允许编辑，如果允许编辑将在添加和修改时输入
     * isSearch 是否允许搜索
     * isDisplay 是否在列表中显示
     * isOrder 是否排序
     * udc - udc code，inputtype为select,checkbox,radio三个值时用到。
     * 特别字段：
     * id：主键。必须含有主键，统一都是id
     * create_date: 创建时间。生成的代码自动赋值
     * update_date: 修改时间。生成的代码自动赋值
     */
    public function getTableColumnInfo(){
        return array(
        'id' => array(
                        'name' => 'id',
                        'allowNull' => false,
//                         'autoIncrement' => true,
//                         'comment' => 'ID',
//                         'dbType' => "bigint(11) unsigned",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => true,
                        'phpType' => 'string',
                        'precision' => '11',
                        'scale' => '',
                        'size' => '11',
                        'type' => 'bigint',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('id'),
                        'inputType' => 'hidden',
                        'isEdit' => true,
                        'isSearch' => true,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'doctor_name' => array(
                        'name' => 'doctor_name',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '病人医生',
//                         'dbType' => "varchar(32)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '32',
                        'scale' => '',
                        'size' => '32',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('doctor_name'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'building' => array(
                        'name' => 'building',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '住院楼栋',
//                         'dbType' => "tinyint(2) unsigned",
                        'defaultValue' => '1',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '2',
                        'scale' => '',
                        'size' => '2',
                        'type' => 'tinyint',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('building'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'room_num' => array(
                        'name' => 'room_num',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '住院房号',
//                         'dbType' => "int(10) unsigned",
                        'defaultValue' => '101',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '10',
                        'scale' => '',
                        'size' => '10',
                        'type' => 'integer',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('room_num'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'patient_name' => array(
                        'name' => 'patient_name',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '病人姓名',
//                         'dbType' => "varchar(255)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '255',
                        'scale' => '',
                        'size' => '255',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('patient_name'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'patient_card' => array(
                        'name' => 'patient_card',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '病人身份证',
//                         'dbType' => "varchar(20)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '20',
                        'scale' => '',
                        'size' => '20',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('patient_card'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'live_days' => array(
                        'name' => 'live_days',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '住院天数',
//                         'dbType' => "mediumint(5) unsigned",
                        'defaultValue' => '0',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '5',
                        'scale' => '',
                        'size' => '5',
                        'type' => 'integer',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('live_days'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'all_income' => array(
                        'name' => 'all_income',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '总费用',
//                         'dbType' => "decimal(10,2) unsigned",
                        'defaultValue' => '0.00',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '10',
                        'scale' => '2',
                        'size' => '10',
                        'type' => 'decimal',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('all_income'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'is_card' => array(
                        'name' => 'is_card',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '是否使用',
//                         'dbType' => "tinyint(1) unsigned",
                        'defaultValue' => '0',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '1',
                        'scale' => '',
                        'size' => '1',
                        'type' => 'tinyint',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('is_card'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'nurse_group' => array(
                        'name' => 'nurse_group',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '所属护士组',
//                         'dbType' => "varchar(255)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '255',
                        'scale' => '',
                        'size' => '255',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('nurse_group'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'create_time' => array(
                        'name' => 'create_time',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '创建日期',
//                         'dbType' => "datetime",
                        'defaultValue' => '0000-00-00 00:00:00',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'datetime',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('create_time'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'update_time' => array(
                        'name' => 'update_time',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '更新日期',
//                         'dbType' => "datetime",
                        'defaultValue' => '0000-00-00 00:00:00',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'datetime',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('update_time'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		        );
        
    }
 
}
