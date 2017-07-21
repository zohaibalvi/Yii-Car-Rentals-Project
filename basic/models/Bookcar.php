<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookcar".
 *
 * @property integer $Booking_Id
 * @property string $Name
 * @property integer $Mobile
 * @property integer $Car_Code
 * @property string $Time
 * @property string $Pick_up_Time
 * @property string $Date
 * @property string $Pick_up_Date
 * @property string $Pick_up_Adress
 * @property string $Drop_off_Address
 */
class Bookcar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bookcar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Mobile', 'Car_Code', 'Time', 'Pick_up_Time', 'Date', 'Pick_up_Date', 'Pick_up_Adress', 'Drop_off_Address'], 'required'],
            [['Mobile', 'Car_Code'], 'integer'],
            [['Time', 'Pick_up_Time', 'Date', 'Pick_up_Date'], 'safe'],
            [['Name'], 'string', 'max' => 100],
            [['Pick_up_Adress', 'Drop_off_Address'], 'string', 'max' => 200],
            [['Car_Code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Booking_Id' => 'Booking  ID',
            'Name' => 'Name',
            'Mobile' => 'Mobile',
            'Car_Code' => 'Car  Code',
            'Time' => 'Time',
            'Pick_up_Time' => 'Pick Up  Time',
            'Date' => 'Date',
            'Pick_up_Date' => 'Pick Up  Date',
            'Pick_up_Adress' => 'Pick Up  Adress',
            'Drop_off_Address' => 'Drop Off  Address',
        ];
    }
}
