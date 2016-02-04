<?php

namespace BackEnd\DataBaseBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BackEndDataBaseBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
