<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Artikel;

/**
 * searchartikel represents the model behind the search form about `common\models\artikel`.
 */
class searchartikel extends artikel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_artikel', 'id_kategori', 'jumlah_baca', 'create_by'], 'integer'],
            [['tanggal', 'judul', 'isi_artikel', 'gambar', 'aktif'], 'safe'],
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
        $query = artikel::find();

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
            'id_artikel' => $this->id_artikel,
            'tanggal' => $this->tanggal,
            'id_kategori' => $this->id_kategori,
            'jumlah_baca' => $this->jumlah_baca,
            'create_by' => $this->create_by,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'isi_artikel', $this->isi_artikel])
            ->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'aktif', $this->aktif]);

        return $dataProvider;
    }
}
