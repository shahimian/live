Live
====
<center><img src="http://cimethod.com/web/images/old-radio.jpg"></center>
It contain broadcast radio system and its special appreance as old radio

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist shahimian/yii2-live "*"
```

or add

```
"shahimian/yii2-live": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \shahimian\live\Live::widget([
    'username' => :sunglasses:,
    'source' => :face_with_head_bandage:,
]); ?>
```
For accessing to public property of user name and for further to information about source property , go ahead to (CentovaCast)[https://control.internet-radio.com:2199/login/index.php].