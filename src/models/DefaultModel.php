<?php

namespace yozh\template\models;

use Yii;

class DefaultModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }
	
	public function attributeIndexList()
	{
		return [
			'id',
		];
	}
	
	public function attributeViewList()
	{
		return [
			'id',
		];
	}
	
	public function attributeCreateList()
	{
		return $this->attributeEditList();
	}
	
	public function attributeUpdateList()
	{
		return $this->attributeEditList();
	}
	
	public function attributeEditList()
	{
		return [
			'id',
		];
	}
    
    /**
     * @return \yii\db\ActiveQuery
     */
	/*
    public function getRelationRecords()
    {
        return $this->hasMany(RefModel::className(), ['ref_id' => 'table_id']);
    }
	*/
}
