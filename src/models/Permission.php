<?php
/**
 * User: rgv151
 * Date: 6/13/13
 * Time: 3:40 PM
 */

namespace Rgv151\Spratly;

use Eloquent;

/**
 * Generated properties for Rgv151\Spratly\Permission
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Role[] $roles
 */
class Permission extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spratly_permissions';

    protected $guarded = array('id');

    public function roles() {
        return $this->belongsToMany('Role', 'spratly_roles_permissions');
    }

}