<?php
/**
 * User: rgv151
 * Date: 6/13/13
 * Time: 6:45 PM
 */

namespace Rgv151\Spratly;

class FormHelper {
    /**
     * Get data of a model for select list
     * @param $model Data model
     * @param null $selected Selected item
     * @param null $field Name of field to display
     * @return array
     */
    public static function getRelationshipSelectList($model, $selected = null, $field = null) {
        $list = array();

        if($field == null) {
            $field = 'name';
        }

        foreach($model::all() as $role) {
            $list[$role->id] = $role->$field;
            if($selected == null && $role->default == true) {
                $selected = $role->id;
            }
        }

        return array('list' => $list, 'selected' => $selected);
    }
}