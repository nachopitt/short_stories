<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShortStories Model
 *
 * @property \App\Model\Table\KeywordsTable&\Cake\ORM\Association\BelongsToMany $Keywords
 *
 * @method \App\Model\Entity\ShortStory newEmptyEntity()
 * @method \App\Model\Entity\ShortStory newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ShortStory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ShortStory get($primaryKey, $options = [])
 * @method \App\Model\Entity\ShortStory findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ShortStory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ShortStory[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ShortStory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ShortStory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ShortStory[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ShortStory[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ShortStory[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ShortStory[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ShortStoriesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('short_stories');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Keywords', [
            'foreignKey' => 'short_story_id',
            'targetForeignKey' => 'keyword_id',
            'joinTable' => 'keywords_short_stories',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 100)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('author')
            ->maxLength('author', 100)
            ->requirePresence('author', 'create')
            ->notEmptyString('author');

        $validator
            ->scalar('source')
            ->maxLength('source', 100)
            ->requirePresence('source', 'create')
            ->notEmptyString('source');

        $validator
            ->scalar('genre')
            ->maxLength('genre', 45)
            ->requirePresence('genre', 'create')
            ->notEmptyString('genre');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

        $validator
            ->scalar('language')
            ->maxLength('language', 45)
            ->requirePresence('language', 'create')
            ->notEmptyString('language');

        $validator
            ->nonNegativeInteger('length')
            ->requirePresence('length', 'create')
            ->notEmptyString('length');

        $validator
            ->scalar('length_unit')
            ->maxLength('length_unit', 45)
            ->requirePresence('length_unit', 'create')
            ->notEmptyString('length_unit');

        $validator
            ->scalar('summary')
            ->requirePresence('summary', 'create')
            ->notEmptyString('summary');

        $validator
            ->scalar('state')
            ->maxLength('state', 45)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        return $validator;
    }

    public function findListByField(String $field) {
        return $this->find('list', [
            'keyField' => $field,
            'valueField' => $field
        ]);
    }
}
