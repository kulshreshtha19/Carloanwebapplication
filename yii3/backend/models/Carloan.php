<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%carloan}}".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $cartype
 * @property string $precar
 * @property string $currenlive
 * @property string $comname
 * @property string $grosssalary
 * @property string $salaryaccount
 * @property string $joiningdate
 * @property int $workexperience
 * @property string $movecity
 * @property string $movecurrent
 * @property string $age
 * @property int $Emi
 * @property int $monthlyincentive
 * @property string $residencetype
 * @property string $savetype
 * @property int $cid
 * @property string $createdAt
 *
 * @property User $c
 */
class Carloan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%carloan}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['workexperience', 'Emi', 'monthlyincentive', 'cid'], 'integer'],
            [['name', 'email', 'residencetype', 'savetype'], 'string', 'max' => 50],
            [['phone', 'grosssalary', 'salaryaccount', 'joiningdate'], 'string', 'max' => 10],
            [['cartype', 'precar', 'currenlive', 'createdAt'], 'string', 'max' => 20],
            [['comname'], 'string', 'max' => 40],
            [['movecity', 'movecurrent', 'age'], 'string', 'max' => 30],
            [['cid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['cid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'cartype' => 'Cartype',
            'precar' => 'Precar',
            'currenlive' => 'Currenlive',
            'comname' => 'Comname',
            'grosssalary' => 'Grosssalary',
            'salaryaccount' => 'Salaryaccount',
            'joiningdate' => 'Joiningdate',
            'workexperience' => 'Workexperience',
            'movecity' => 'Movecity',
            'movecurrent' => 'Movecurrent',
            'age' => 'Age',
            'Emi' => 'Emi',
            'monthlyincentive' => 'Monthlyincentive',
            'residencetype' => 'Residencetype',
            'savetype' => 'Savetype',
            'cid' => 'Cid',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getC()
    {
        return $this->hasOne(User::className(), ['id' => 'cid']);
    }
}
