<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
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
//        'parent_id' => true,
        'email' => true,
        'username' => true,
        'password' => true,
        'first_name' => true,
        'last_name' => true,
        'mobile_no' => true,
        'status' => true,
        'parent_user' => true,
        'schools' => true,
        'child_users' => true,
    ];
    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }
}