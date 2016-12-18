<?php
/**
 * Created by PhpStorm.
 * User: mehdi.souihed
 * Date: 16/12/16
 * Time: 15:06
 */

namespace App\Domain;


class ClientID
{

    private $id;

    /**
     * ClientID constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}