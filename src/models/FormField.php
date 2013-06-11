<?php
/**
 * User: rgv151
 * Date: 6/12/13
 * Time: 1:02 AM
 */

namespace Rgv151\Spratly;

use Eloquent;

/**
 * Generated properties for Rgv151\Spratly\FormField
 *
 * @property integer $id
 * @property integer $form_id
 * @property string $field
 * @property string $name
 * @property string $description
 * @property string $type
 * @property string $widget
 * @property integer $order
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read \Form $form
 */
class FormField extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spratly_form_fields';

    protected $guarded = array('id');

    public function form() {
        return $this->belongsTo('Form');
    }
}