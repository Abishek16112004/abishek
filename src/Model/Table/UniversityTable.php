<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * University Model
 *
 * @property \App\Model\Table\CourseTable&\Cake\ORM\Association\HasMany $Course
 *
 * @method \App\Model\Entity\University newEmptyEntity()
 * @method \App\Model\Entity\University newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\University[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\University get($primaryKey, $options = [])
 * @method \App\Model\Entity\University findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\University patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\University[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\University|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\University saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\University[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\University[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\University[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\University[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UniversityTable extends Table
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

        $this->setTable('university');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Course', [
            'foreignKey' => 'university_id',
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
            ->scalar('university_name')
            ->maxLength('university_name', 255)
            ->requirePresence('university_name', 'create')
            ->notEmptyString('university_name')
            ->add('university_name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->dateTime('timestamp')
            ->notEmptyDateTime('timestamp');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['university_name']), ['errorField' => 'university_name']);

        return $rules;
    }
}
