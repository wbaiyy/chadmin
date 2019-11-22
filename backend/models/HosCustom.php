<?php
namespace app\models;

use Yii;

/**
 * This is the model class for table "hos_custom".
 *
 * @property string $id
 * @property string $name
 * @property string $position
 * @property integer $age
 * @property string $phone
 * @property string $education
 * @property string $initiation_time
 * @property string $woke_type
 * @property string $technical_level
 * @property integer $score
 * @property string $update_time
 */
class HosCustom extends \backend\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hos_custom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['initiation_time', 'update_time'], 'required'],
            [['initiation_time', 'update_time'], 'safe'],
            [['name', 'education'], 'string', 'max' => 32],
            [['position'], 'string', 'max' => 64],
            [['age', 'score'], 'string', 'max' => 3],
            [['phone', 'woke_type', 'technical_level'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '职工姓名',
            'position' => '职位',
            'age' => '年龄',
            'phone' => '联系方式',
            'education' => '学历',
            'initiation_time' => '入职时间',
            'woke_type' => '工种',
            'technical_level' => '技术等级',
            'score' => '评分',
            'update_time' => '更新日期',
        ];
    }

    /**
     * @inheritdoc
     * @return HosCustomQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HosCustomQuery(get_called_class());
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
		'name' => array(
                        'name' => 'name',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '职工姓名',
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
                        'label'=>$this->getAttributeLabel('name'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'position' => array(
                        'name' => 'position',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '职位',
//                         'dbType' => "varchar(64)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '64',
                        'scale' => '',
                        'size' => '64',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('position'),
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
//                         'comment' => '年龄',
//                         'dbType' => "tinyint(3) unsigned",
                        'defaultValue' => '0',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '3',
                        'scale' => '',
                        'size' => '3',
                        'type' => 'tinyint',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('age'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'phone' => array(
                        'name' => 'phone',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '联系方式',
//                         'dbType' => "varchar(16)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '16',
                        'scale' => '',
                        'size' => '16',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('phone'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'education' => array(
                        'name' => 'education',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '学历',
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
                        'label'=>$this->getAttributeLabel('education'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'initiation_time' => array(
                        'name' => 'initiation_time',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '入职时间',
//                         'dbType' => "datetime",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'datetime',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('initiation_time'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'woke_type' => array(
                        'name' => 'woke_type',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '工种',
//                         'dbType' => "varchar(16)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '16',
                        'scale' => '',
                        'size' => '16',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('woke_type'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'technical_level' => array(
                        'name' => 'technical_level',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '技术等级',
//                         'dbType' => "varchar(16)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '16',
                        'scale' => '',
                        'size' => '16',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('technical_level'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'score' => array(
                        'name' => 'score',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '评分',
//                         'dbType' => "tinyint(3) unsigned",
                        'defaultValue' => '0',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '3',
                        'scale' => '',
                        'size' => '3',
                        'type' => 'tinyint',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('score'),
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
                        'defaultValue' => '',
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
