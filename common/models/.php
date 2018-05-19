<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\daftarharga;

/**
 * models represents the model behind the search form about `common\models\daftarharga`.
 */
class models extends daftarharga
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_daftarharga'], 'integer'],
            [['judul', 'jenis', 'pekerjaan', 'jenisfreon', 'qty', 'harga', 'aktif'], 'safe'],
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
        $query = daftarharga::find();

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
            'id_daftarharga' => $this->id_daftarharga,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'jenisfreon', $this->jenisfreon])
            ->andFilterWhere(['like', 'qty', $this->qty])
            ->andFilterWhere(['like', 'harga', $this->harga])
            ->andFilterWhere(['like', 'aktif', $this->aktif]);

        return $dataProvider;
    }
}
