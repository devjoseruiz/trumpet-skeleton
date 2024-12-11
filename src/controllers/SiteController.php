<?php

namespace app\controllers;

use devjoseruiz\trumpet\Controller;
use devjoseruiz\trumpet\Request;
use app\models\RateModel;

class SiteController extends Controller
{
    public function home()
    {
        $this->setTitle('Home');
        return $this->render('home');
    }

    public function rate(Request $request)
    {
        $this->setTitle('Rate');
        $rateModel = new RateModel();

        if ($request->isPost()) {
            $rateModel->loadData($request->getBody());
            $rateModel->validate();

            return $this->render(
                'rate',
                model: $rateModel
            );
        }

        return $this->render('rate');
    }
}