<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Carloan;

/**
 * CarSearch represents the model behind the search form of `frontend\models\Carloan`.
 */
class CarSearch extends Carloan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'workexperience', 'Emi', 'monthlyincentive', 'cid'], 'integer'],
            [['name', 'phone', 'email', 'cartype', 'precar', 'currenlive', 'comname', 'grosssalary', 'salaryaccount', 'joiningdate', 'movecity', 'movecurrent', 'age', 'residencetype', 'savetype', 'createdAt'], 'safe'],
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
        $query = Carloan::find();

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
            'id' => $this->id,
            'workexperience' => $this->workexperience,
            'Emi' => $this->Emi,
            'monthlyincentive' => $this->monthlyincentive,
            'cid' => $this->cid,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'cartype', $this->cartype])
            ->andFilterWhere(['like', 'precar', $this->precar])
            ->andFilterWhere(['like', 'currenlive', $this->currenlive])
            ->andFilterWhere(['like', 'comname', $this->comname])
            ->andFilterWhere(['like', 'grosssalary', $this->grosssalary])
            ->andFilterWhere(['like', 'salaryaccount', $this->salaryaccount])
            ->andFilterWhere(['like', 'joiningdate', $this->joiningdate])
            ->andFilterWhere(['like', 'movecity', $this->movecity])
            ->andFilterWhere(['like', 'movecurrent', $this->movecurrent])
            ->andFilterWhere(['like', 'age', $this->age])
            ->andFilterWhere(['like', 'residencetype', $this->residencetype])
            ->andFilterWhere(['like', 'savetype', $this->savetype])
            ->andFilterWhere(['like', 'createdAt', $this->createdAt]);

        return $dataProvider;
    }
}
