<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RegisterCar;

/**
 * RegisterCarSearch represents the model behind the search form about `app\models\RegisterCar`.
 */
class RegisterCarSearch extends RegisterCar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Car_Id', 'Car_Number', 'Contact_Number', 'Number_Of_Seats', 'Price_Per_Day'], 'integer'],
            [['Name', 'Company', 'City', 'Company_Created_Date', 'Description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RegisterCar::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Car_Id' => $this->Car_Id,
            'Car_Number' => $this->Car_Number,
            'Contact_Number' => $this->Contact_Number,
            'Number_Of_Seats' => $this->Number_Of_Seats,
            'Price_Per_Day' => $this->Price_Per_Day,
            'Company_Created_Date' => $this->Company_Created_Date,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Company', $this->Company])
            ->andFilterWhere(['like', 'City', $this->City])
            ->andFilterWhere(['like', 'Description', $this->Description]);

        return $dataProvider;
    }
}
