<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Projects;

/**
 * ProjectsSearch represents the model behind the search form about `app\modules\admin\models\Projects`.
 */
class ProjectsSearch extends Projects
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'description', 'demensions', 'paramtitle1', 'paramvalue1', 'paramtitle2', 'paramvalue2', 'list1', 'list2', 'list3', 'photo1', 'photo2', 'photo3', 'photo4', 'photo5', 'youtube'], 'safe'],
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
        $query = Projects::find();

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
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'demensions', $this->demensions])
            ->andFilterWhere(['like', 'paramtitle1', $this->paramtitle1])
            ->andFilterWhere(['like', 'paramvalue1', $this->paramvalue1])
            ->andFilterWhere(['like', 'paramtitle2', $this->paramtitle2])
            ->andFilterWhere(['like', 'paramvalue2', $this->paramvalue2])
            ->andFilterWhere(['like', 'list1', $this->list1])
            ->andFilterWhere(['like', 'list2', $this->list2])
            ->andFilterWhere(['like', 'list3', $this->list3])
            ->andFilterWhere(['like', 'photo1', $this->photo1])
            ->andFilterWhere(['like', 'photo2', $this->photo2])
            ->andFilterWhere(['like', 'photo3', $this->photo3])
            ->andFilterWhere(['like', 'photo4', $this->photo4])
            ->andFilterWhere(['like', 'photo5', $this->photo5])
            ->andFilterWhere(['like', 'youtube', $this->youtube]);

        return $dataProvider;
    }
}
