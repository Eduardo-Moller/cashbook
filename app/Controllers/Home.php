<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function list($dateStart = null, $dateEnd = null)
    {
        $model = $this->load_model("Home");
        $listMoviments = $model->list($dateStart, $dateEnd);
        $data['values'] = $listMoviments;
        $cash_balance = $model->cash_balance();
        $data['cash_balance'] = $cash_balance;
        $entrada = $model->entrada();
        $data['entrada'] = $entrada;
        $saida = $model->saida();
        $data['saida'] = $saida;

        $this->view->show("home\home", $data);
    }
}
