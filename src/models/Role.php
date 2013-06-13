<?php
/**
 * User: rgv151
 * Date: 6/13/13
 * Time: 3:40 PM
 */


namespace Rgv151\Spratly;

use Eloquent;

/**
 * Generated properties for Rgv151\Spratly\Role
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property boolean $default
 * @property boolean $removable
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Permission[] $permissions
 */
class Role extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spratly_roles';

    protected $guarded = array('id');

    public function permissions() {
        return $this->belongsToMany('Rgv151\Spratly\Permission', 'spratly_roles_permissions');
    }
}