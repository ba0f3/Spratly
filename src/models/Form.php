<?php
/**
 * User: rgv151
 * Date: 6/12/13
 * Time: 1:01 AM
 */

namespace Rgv151\Spratly;

use Eloquent;

/**
 * Generated properties for Rgv151\Spratly\Form
 *
 * @property integer $id
 * @property string $name
 * @property string $model
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\FormField[] $fields
 */
class Form extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spratly_forms';

    protected $guarded = array('id');

    public function fields() {
        return $this->hasMany('FormField');
    }
}