<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'owner_id' => true,
        'email' => true,
        'password' => true,
        'first_name' => true,
        'last_name' => true,
        'mobile_no' => true,
        'status' => true,
        'username' => true,
        'group_id' => true,
        'parent_user' => true,
        'schools' => true,
        'child_users' => true,
    ];
}
