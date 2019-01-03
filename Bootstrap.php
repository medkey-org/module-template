<?php
namespace app\modules\config;

use yii\base\BootstrapInterface;

/**
 * Class Bootstrap
 * @package Module\Config
 * @copyright 2012-2019 Medkey
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        \Yii::$container->setSingletons([
        ]);
    }
}
