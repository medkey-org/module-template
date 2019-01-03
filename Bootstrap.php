<?php
namespace app\modules\moduleTemplate;

use yii\base\BootstrapInterface;

/**
 * Class Bootstrap
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
