<?php 

namespace app\models;
use yii\db\ActiveRecord;

class Forms extends ActiveRecord{
    /**
 * @inheritdoc
 */
    public static function tableName(){
        return 'forms';
    }

    public function rules()
    { //start
        return [
            [['name','email','theme','title','content'], 'required'], //todos los campos son requeridos
            ['email', 'email'], //validar correo
            [['name'],'string', 'max' => 50], //validar longitud
            [['email'], 'string', 'max' => 50], //validar longitud
            [['theme'], 'string', 'max' => 50], //validar longitud
            [['title'], 'string', 'max' => 50], //validar longitud
            [['content'], 'string', 'max' => 50], //validar longitud
            
        ];
    } //end
 }    
