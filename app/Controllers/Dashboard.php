<?php

namespace App\Controllers;
use App\Models\M_login;

class Dashboard extends BaseController
{
    
    public function index()
    {
        if(session()->get('id')>0) {
           $model=new M_login();
           $id=session()->get('id');
           $on='user.level=level.id_level';
           $where=array('user.id_user'=>$id);
           $data['jojo']=$model->joinlogin('user', 'level', $on, $where);
           $data['title']='Dashboard';

           echo view('partial/header', $data);
         
           echo view('partial/menuutama');
           echo view('login/dashboard', $data);
           echo view('partial/footer');

       }else{
        return redirect()->to('login');
    }
}

}