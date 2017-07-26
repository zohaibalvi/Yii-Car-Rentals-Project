<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\bookcar;

/**
 * BookcarSearch represents the model behind the search form about `app\models\bookcar`.
 */
class BookcarSearch extends bookcar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Booking_Id', 'Mobile', 'Car_Code'], 'integer'],
            [['Name', 'Time', 'Pick_up_Adress', 'Drop_off_Address'], 'safe'],
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
        $query = bookcar::find();

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
            'Booking_Id' => $this->Booking_Id,
            'Mobile' => $this->Mobile,
            'Car_Code' => $this->Car_Code,
            'Time' => $this->Time,
            
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Pick_up_Adress', $this->Pick_up_Adress])
            ->andFilterWhere(['like', 'Drop_off_Address', $this->Drop_off_Address]);

        return $dataProvider;
    }
}
