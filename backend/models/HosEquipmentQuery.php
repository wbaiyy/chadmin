<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[HosEquipment]].
 *
 * @see HosEquipment
 */
class HosEquipmentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return HosEquipment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return HosEquipment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}