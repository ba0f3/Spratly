<?php
/**
 * User: rgv151
 * Date: 6/11/13
 * Time: 1:43 AM
 */
namespace Rgv151\Spratly;
use Eloquent;
/**
 * Generated properties for Rgv151\Spratly\Menu
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property string $path
 * @property boolean $enabled
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property string $icon
 * @property string $alias
 */
class Menu extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spratly_menus';

    protected $guarded = array('id');
}