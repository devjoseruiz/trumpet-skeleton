<?php

namespace app\controllers;

use devjoseruiz\trumpet\Application;
use devjoseruiz\trumpet\Controller;
use devjoseruiz\trumpet\Request;
use devjoseruiz\trumpet\Response;
use app\models\UserModel;
use app\models\LoginModel;
use devjoseruiz\trumpet\middlewares\AuthMiddleware;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['logout']));
    }

    public function login(Request $request, Response $response)
    {
        $this->setTitle('Login');
        $this->setLayout('basic');
        $loginModel = new LoginModel();

        if ($request->isPost()) {
            $loginModel->loadData($request->getBody());

            if (!$loginModel->validate()) {
                return $this->render(
                    'auth/login',
                    model: $loginModel
                );
            }

            if (!$loginModel->login()) {
                $response->redirect('/login');
            }

            $response->redirect('/');
        }

        return $this->render('auth/login', model: $loginModel);
    }

    public function register(Request $request, Response $response)
    {
        $this->setTitle('Register');
        $this->setLayout('basic');
        $userModel = new UserModel();

        if ($request->isPost()) {
            $userModel->loadData($request->getBody());

            if (!$userModel->validate() || !$userModel->save()) {
                return $this->render(
                    'auth/register',
                    model: $userModel
                );
            }

            Application::$app->session->setFlashData(
                'success',
                'You have been registered! You can now log in.'
            );
            $response->redirect('/login');
        }

        return $this->render('auth/register', model: $userModel);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }
}
