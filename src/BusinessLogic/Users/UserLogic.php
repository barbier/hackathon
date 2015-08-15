<?php

use BusinessLogic\Commons\BaseBusinessLogic;
use BusinessLogic\Users\Model\Users;

class PontosLogic extends BaseBusinessLogic
{
    /*
     * Pegar todos os pontos
     */
    public function getAll()
    {
        try {
            return Users::find('all', array());
        } catch(\Exception $e) {
            throw $e;
        }
    }
}