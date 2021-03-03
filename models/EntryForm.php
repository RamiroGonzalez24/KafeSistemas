<?php

namespace app\models;

use Yii;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "entry_form".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $lastname
 * @property string|null $email
 * @property int|null $age
 * @property string|null $dni
 * @property string|null $friend
 */
class EntryForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entry_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['name', 'lastname', 'dni'], 'string', 'max' => 20],
            ['email', 'email'],
            ['age','number','min' => 18,'message' => 'Debe ser mayor a 18 para registrarte'],
            ['dni','string','min' => 7,'max' => 9,'message' => 'Ingrese un dni valido'],
            [['friend'], 'string']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nombre',
            'lastname' => 'Apellido',
            'email' => 'Email',
            'age' => 'Edad',
            'dni' => 'DNI',
            'friend' => 'Amigo'
        ];
    }
}
