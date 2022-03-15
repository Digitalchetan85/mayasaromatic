<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct() {
        helper('form');
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
    }
    public function index()
    {
        return view('home_view');
    }

    public function about() {
        return view('about_view');
    }

    public function products() {
        return view('product_view');
    }

    public function gallery() {
        return view('gallery_view');
    }

    public function contact()
    {
        //        $data = [
        //            "page_title" => "GoPHP Trianing and Development",
        //        ];
        $data = [];
        $data['validation'] = null;
        //        $session = session();

        $session = \CodeIgniter\Config\Services::session();

        //        $rules = [
        //            'name' => 'required',
        //            'email' => 'required|valid_email',
        //            'phone' => 'required|numeric|exact_length[10]',
        //        ];

        $rules = [
            'name' => [
                'rules' => 'required',
                'errors' => "username is required",
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Please enter the email id',
                    'valid_email' => 'Please enter the valid email id',
                ],
            ],
            'phone' => [
                'rules' => 'required|numeric|exact_length[10]',
                'errors' => [
                    'required' => 'Phone No. is required.',
                    'numeric' => 'mobile no {value} should be numeric',
                    'exact_length' => 'Mobile {value} should contain exactly {param} digits'
                ],
            ],
        ];

        if ($this->request->getMethod() == "post") {
            if ($this->validate($rules)) {
                //ready to save
                //                echo "ready to save";
                $cdata = [
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'phone' => $this->request->getVar('phone'),
                ];
                $status = $this->themeModel->saveData($cdata);
                //                echo $status;
                if ($status) {
                    //                    echo "hello";
                    $session->setTempdata('success', 'Thanks, We will get back you soon', 3);
                    return redirect()->to(current_url());
                } else {
                    //                    echo "wrong";
                    $session->setTempdata('error', 'sorry Try Again', 3);
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }
        echo view("contact_view", $data);
    }

    public function enquiry() {
        return view("enquiry_view");
    }
}
