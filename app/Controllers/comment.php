<?php

namespace App\Controllers;
use App\Models\M_model;
use App\Models\M_book;
use App\Models\KoleksiModel;
class comment extends BaseController
{

    public function index()
    {
        if (session()->get('id') > 0) {
            $model = new M_model();
            $userLevel = session()->get('level');
    
            if ($userLevel == 1 || $userLevel == 2) {
                $on = 'comments.book_id = book.id_book';
                $on1 = 'comments.user_id = user.id_user';
                $data['a'] = $model->join3('comments', 'book', 'user', $on, $on1);
            } elseif ($userLevel == 3) {
                $userId = session()->get('id');
                $data['a'] = $model->getCommentsDataByIdUser($userId);
            }
    
            $data['title'] = 'Ulasan';
    
            echo view('partial/header', $data);
            echo view('partial/menuutama');
            echo view('comments/view', $data);
            echo view('partial/footer');
        } else {
            return redirect()->to('login');
        }
    }
    
}