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
        '*' => true,
        'id' => false,
        
    ];
    
     /*
     * purpose:password encryption method
     * author:Ajay Pratap singh
     * created:2/08/15
     **/
    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }
}

