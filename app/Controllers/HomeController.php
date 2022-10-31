<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\MovimentsModel;

class HomeController extends BaseController
{
    public function index()
    {
        $movModel = new MovimentsModel();
        $list=$movModel->list();
        $data['list'] = $list;
        $input=$movModel->input();
        $data['input'] = $input;
        $output=$movModel->output();
        $data['output'] = $output;
        $cash_balance=$movModel->cash_balance();
        $data['cash_balance'] = $cash_balance;
        return view('home', $data);
    }
}
