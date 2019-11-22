<?php
namespace app\models;

use Yii;

/**
 * This is the model class for table "hos_door_diagnosis".
 *
 * @property integer $id
 * @property string $doctor_name
 * @property integer $is_register
 * @property string $patient_source
 * @property string $patient_name
 * @property string $patient_card
 * @property string $sex
 * @property integer $age
 * @property string $income
 * @property integer $is_card
 * @property string $craete_time
 */
class HosDoorDiagnosis extends \backend\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hos_door_diagnosis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sex'], 'string'],
            [['age'], 'required'],
            [['income'], 'number'],
            [['craete_time'], 'safe'],
            [['doctor_name'], 'string', 'max' => 32],
            [['is_register', 'is_card'], 'string', 'max' => 1],
            [['patient_source', 'patient_name'], 'string', 'max' => 255],
            [['patient_card'], 'string', 'max' => 20],
            [['age'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'doctor_name' => '医生ID',
            'is_register' => '是否挂号，0否1是',
            'patient_source' => '病人来源',
            'patient_name' => '病人姓名',
            'patient_card' => '病人身份证',
            'sex' => '性别',
            'age' => 'Age',
            'income' => '门诊金额',
            'is_card' => '是否社保卡,0否1是',
            'craete_time' => '创建时间',
        ];
    }

    /**
     * @inheritdoc
     * @return HosDoorDiagnosisQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HosDoorDiagnosisQuery(get_called_class());
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
//                         'dbType' => "bigint(11)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => true,
                        'phpType' => 'integer',
                        'precision' => '11',
                        'scale' => '',
                        'size' => '11',
                        'type' => 'bigint',
                        'unsigned' => false,
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
//                         'comment' => '医生ID',
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
		'is_register' => array(
                        'name' => 'is_register',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '是否挂号，0否1是',
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
                        'label'=>$this->getAttributeLabel('is_register'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'patient_source' => array(
                        'name' => 'patient_source',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '病人来源',
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
                        'label'=>$this->getAttributeLabel('patient_source'),
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
		'sex' => array(
                        'name' => 'sex',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '性别',
//                         'dbType' => "enum('女','男')",
                        'defaultValue' => '男',
                        'enumValues' => ["\u5973","\u7537"],
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('sex'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'age' => array(
                        'name' => 'age',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '',
//                         'dbType' => "tinyint(3)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '3',
                        'scale' => '',
                        'size' => '3',
                        'type' => 'tinyint',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('age'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'income' => array(
                        'name' => 'income',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '门诊金额',
//                         'dbType' => "decimal(10,2)",
                        'defaultValue' => '0.00',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '10',
                        'scale' => '2',
                        'size' => '10',
                        'type' => 'decimal',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('income'),
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
//                         'comment' => '是否社保卡,0否1是',
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
		'craete_time' => array(
                        'name' => 'craete_time',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '创建时间',
//                         'dbType' => "timestamp",
                        'defaultValue' => '0000-00-00 00:00:00',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'timestamp',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('craete_time'),
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
