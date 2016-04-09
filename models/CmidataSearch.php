<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cmidata;

/**
 * CmidataSearch represents the model behind the search form about `app\models\Cmidata`.
 */
class CmidataSearch extends Cmidata {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['hospcode', 'hospname', 'chwcode', 'chwname'], 'safe'],
            [['cntm10', 'adjm10', 'cntm11', 'adjm11', 'cntm12', 'adjm12', 'cntm01', 'adjm01', 'cntm02', 'adjm02', 'cntm03', 'adjm03', 'cntm04', 'adjm04', 'cntm05', 'adjm05', 'cntm06', 'adjm06', 'cntm07', 'adjm07', 'cntm08', 'adjm08', 'cntm09', 'adjm09', 'cntm99', 'adjm99'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Cmidata::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'cntm10' => $this->cntm10,
            'adjm10' => $this->adjm10,
            'cntm11' => $this->cntm11,
            'adjm11' => $this->adjm11,
            'cntm12' => $this->cntm12,
            'adjm12' => $this->adjm12,
            'cntm01' => $this->cntm01,
            'adjm01' => $this->adjm01,
            'cntm02' => $this->cntm02,
            'adjm02' => $this->adjm02,
            'cntm03' => $this->cntm03,
            'adjm03' => $this->adjm03,
            'cntm04' => $this->cntm04,
            'adjm04' => $this->adjm04,
            'cntm05' => $this->cntm05,
            'adjm05' => $this->adjm05,
            'cntm06' => $this->cntm06,
            'adjm06' => $this->adjm06,
            'cntm07' => $this->cntm07,
            'adjm07' => $this->adjm07,
            'cntm08' => $this->cntm08,
            'adjm08' => $this->adjm08,
            'cntm09' => $this->cntm09,
            'adjm09' => $this->adjm09,
            'cntm99' => $this->cntm99,
            'adjm99' => $this->adjm99,
        ]);

        $query->andFilterWhere(['like', 'hospcode', $this->hospcode])
                ->andFilterWhere(['like', 'hospname', $this->hospname])
                ->andFilterWhere(['like', 'chwcode', $this->chwcode])
                ->andFilterWhere(['like', 'chwname', $this->chwname]);

        return $dataProvider;
    }

}
