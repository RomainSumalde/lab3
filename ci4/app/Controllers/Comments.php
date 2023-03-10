<?php

namespace App\Controllers;

use App\Models\CommentsModel;

class Comments extends BaseController
{
    public function index()
    {
        $model = model(CommentsModel::class);

        // $data = [
        //     'comments'  => $model->getComments(),
        //     'title' => 'Comment Section',
        // ];

        // return view('templates/header', $data)
        //     . view('comments/index')
        //     . view('templates/footer');        

        //create function
        helper('form');

        $data = [
            'comments'  => $model->getComments(),
            'title' => 'Comment Section',
        ];

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', $data)
            . view('comments/index')
            . view('templates/footer');
        }

        $post = $this->request->getPost(['name', 'email', 'subject', 'message']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'subject' => 'required|max_length[255]|min_length[3]',
            'message'  => 'required|max_length[5000]|min_length[1]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', $data)
            . view('comments/index')
            . view('templates/footer');
        }

        $date = date('F j, Y g:i a');

        

        $model->save([
            'name' => $post['name'],
            'email' => $post['email'],
            'subject' => $post['subject'],
            'message'  => $post['message'],
        ]);

        return view('templates/header', $data)
        . view('comments/success')
        . view('templates/footer');
        //end of create
        
        }//index

    
    }//class