<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[HosMedicine]].
 *
 * @see HosMedicine
 */
class HosMedicineQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return HosMedicine[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return HosMedicine|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}