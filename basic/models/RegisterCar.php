<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "register_car".
 *
 * @property integer $Car_Id
 * @property string $Name
 * @property integer $Car_Number
 * @property string $Company
 * @property string $City
 * @property integer $Contact_Number
 * @property integer $Number_Of_Seats
 * @property integer $Price_Per_Day
 * @property string $Company_Created_Date
 * @property string $Description
 */
class RegisterCar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'register_car';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Car_Number', 'Company', 'City', 'Contact_Number', 'Number_Of_Seats', 'Price_Per_Day', 'Company_Created_Date', 'Description'], 'required'],
            [[ 'Number_Of_Seats', 'Price_Per_Day'], 'integer'],
            [['Company_Created_Date'], 'safe'],
            [['Name', 'Company', 'City'], 'string', 'max' => 25],
            [['Description'], 'string', 'max' => 100],
 ['Contact_Number', 'string', 'max' => 11],
  ['Car_Number', 'string', 'max' => 7],

            [['Car_Number'], 'unique','message'=>'This Car number is already exist!'],

           ['Contact_Number','match','pattern'=>'/^[0-9]*$/','message'=>'Invalid! '],
[['Company','City'],'match','pattern'=>'/^[a-zA-Z\s]*$/'],
             // ['Name','match','pattern'=>'/^[a-zA-Z\s]*$/'],
            ['Car_Number','match','pattern'=>'/^[A-Z]{2}\-[0-9]{4}$/','message'=>'Invalid! XX-1234'],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Car_Id' => 'Car ID',
            'Name' => 'Name',
            'Car_Number' => 'Car Number',
            'Company' => 'Company',
            'City' => 'City',
            'Contact_Number' => 'Contact Number',
            'Number_Of_Seats' => 'Number 0f Seats',
            'Price_Per_Day' => 'Price Per Day',
            'Company_Created_Date' => 'Car Register Date',
            'Description' => 'Description',
        ];
    }
}
