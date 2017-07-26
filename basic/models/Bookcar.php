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
            [['Name', 'Mobile', 'Car_Code','Time', 'Pick_up_Adress', 'Drop_off_Address'], 'required'],
        //   [['Time'], 'date', 'format'=>'H:i'],
           
           
 ['Mobile','match','pattern'=>'/^[0-9]*$/','message'=>'Invalid! '],
        ['Car_Code', 'string', 'max' => 7],

 ['Mobile', 'string', 'max' => 11],

           
            [['Name'], 'string', 'max' => 25],
            ['Name','match','pattern'=>'/^[a-zA-Z\s]*$/'],
            ['Car_Code','match','pattern'=>'/^[A-Z]{2}\-[0-9]{4}$/','message'=>'Invalid! XX-1234'],
            

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
            'Car_Code' => 'Car  Number',
            'Time' => 'Pick Up Date and Time',
           
            'Pick_up_Adress' => 'Pick Up  Adress',
            'Drop_off_Address' => 'Drop Off  Address',
        ];
    }
}
