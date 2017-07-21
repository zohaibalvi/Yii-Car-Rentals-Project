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
 * @property string $Car_Image
 * @property string $Description
 */
class RegisterCars extends \yii\db\ActiveRecord
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
            [['Name', 'Car_Number', 'Company', 'City', 'Contact_Number', 'Number_Of_Seats', 'Price_Per_Day', 'Company_Created_Date', 'Car_Image', 'Description'], 'required'],
            [['Car_Number', 'Contact_Number', 'Number_Of_Seats', 'Price_Per_Day'], 'integer'],
            [['Company_Created_Date'], 'safe'],
            [['Name', 'Company', 'City'], 'string', 'max' => 50],
            [['Car_Image'], 'string', 'max' => 200],
            [['Description'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Car_Id' => 'Car  ID',
            'Name' => 'Name',
            'Car_Number' => 'Car  Number',
            'Company' => 'Company',
            'City' => 'City',
            'Contact_Number' => 'Contact  Number',
            'Number_Of_Seats' => 'Number  Of  Seats',
            'Price_Per_Day' => 'Price  Per  Day',
            'Company_Created_Date' => 'Company  Created  Date',
            'Car_Image' => 'Car  Image',
            'Description' => 'Description',
        ];
    }
}
