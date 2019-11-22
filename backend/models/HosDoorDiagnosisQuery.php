<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[HosDoorDiagnosis]].
 *
 * @see HosDoorDiagnosis
 */
class HosDoorDiagnosisQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return HosDoorDiagnosis[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return HosDoorDiagnosis|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}