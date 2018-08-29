<?php

namespace eseperio\avatar;


class Module extends \yii\base\Module
{

    /**
     * @var string directory where the files will be uploaded
     */
    public $uploadDir = 'uploads';

    /**
     * @var string name of the attribute to be used on forms
     */
    public $attributeName = 'image';
    /**
     * @var array validator to be used for image uploaded
     */
    public $imageValidator = [
        'class' => 'yii\validators\ImageValidator',
        'extensions' => 'png,jpg'
    ];

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }


}