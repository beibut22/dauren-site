<?php

namespace app\models\search;


use app\models\Product;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ProductSearch represents the model behind the search form.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fk_user', 'fk_category', 'status'], 'integer'],
            [['city', 'address'], 'safe'],
            [['price', 'price_active', 'price_profit'], 'number'],
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
        $query = Product::find();

        $dataProvider = new ActiveDataProvider(
            [
                'query' => $query,
            ]
        );

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(
            [
                'id' => $this->id,
                'fk_user' => $this->fk_user,
                'created_at' => $this->created_at,
                'price_profit' => $this->price_profit,
                'status' => $this->status,
            ]
        );

//        $query->andFilterWhere(['like', 'curin', $this->curin])
//            ->andFilterWhere(['like', 'curout', $this->curout])
//            ->andFilterWhere(['like', 'walletin', $this->walletin])
//            ->andFilterWhere(['like', 'walletout', $this->walletout])
//            ->andFilterWhere(['like', 'email', $this->email])
//            ->andFilterWhere(['like', 'info', $this->info])
//            ->andFilterWhere(['like', 'info2', $this->info2])
//            ->andFilterWhere(['like', 'error', $this->error]);

        $query->addOrderBy('id DESC');

        return $dataProvider;
    }
}
