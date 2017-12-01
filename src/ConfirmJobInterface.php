<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\queue;

/**
 * Interface ConfirmJobInterface
 *
 * @author David Sindelar
 */
interface ConfirmJobInterface extends JobInterface
{
    /**
     * @return bool if execution should be processes
     */
    public function shouldProcessExecution();

    /**
     * @return bool if job should be deleted before execution
     */
    public function removeBeforeExecution();

}