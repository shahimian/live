<?php

namespace shahimian\live;

class Live extends \yii\base\Widget
{

    public $username;
    public $source;
    public $logo;
    public $theme = 'default';

    public function run($config = [])
    {
        parent::__construct($config);
        return $this->render('index', [
            'username' => $this->username,
            'source' => $this->source,
            'logo' => isset($this->logo) ? $this->logo : '',
            'theme' => $this->theme,
        ]);
    }
}
