<?php
/**
 * User: rgv151
 * Date: 6/13/13
 * Time: 4:34 PM
 */

namespace Rgv151\Spratly;

/**
 * Generated properties for Rgv151\Spratly\User
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property integer $role_id
 * @property boolean $enabled
 * @property boolean $confirmed
 * @property \Carbon\Carbon $last_login
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Role $role
 */
class User extends \User {
    protected $guarded = array('id');

    public function role() {
        return $this->belongsTo('Rgv151\Spratly\Role');
    }

    public function getDisplayName() {
        return $this->first_name . ' ' . $this->last_name;
    }

}