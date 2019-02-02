<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $picture
 * @property string $phone
 * @property string $cpf
 * @property string $sex
 * @property string $birth
 * @property string $cep
 * @property string $address
 * @property string $number
 * @property string $district
 * @property string $city
 * @property string $state
 */
class Student extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'email' => true,
        'picture' => true,
        'phone' => true,
        'cpf' => true,
        'sex' => true,
        'birth' => true,
        'cep' => true,
        'address' => true,
        'number' => true,
        'district' => true,
        'city' => true,
        'state' => true
    ];
}
