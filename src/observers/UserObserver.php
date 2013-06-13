<?php
/**
 * User: rgv151
 * Date: 6/14/13
 * Time: 12:01 AM
 */

class UserObserver {

    public function creating($model)
    {
        /** @var \Rgv151\Spratly\User $model */
        $model->password = Hash::make($model->password);
    }

    public function updating($model)
    {
        /** @var \Rgv151\Spratly\User $model */
        if(empty($model->password)) {
            $model->password = $model->getOriginal('password');
        }
        if(Hash::needsRehash($model->password)) {
            $model->password = Hash::make($model->password);
        }
    }

}