<?php

namespace Lotto\LottoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LottoController extends Controller
{
    public function indexAction()
    {
        return $this->render('LottoLottoBundle:Lotto:lotto.html.twig');
    }
}
