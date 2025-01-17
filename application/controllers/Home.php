<?php
class Home extends CI_Controller

{
    public function index()
    {
        $data['title'] = 'Home | Unipath Pathology';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('home');
    }

    public function lab_listing()
    {
        $data['title'] = 'Lab Listing | Unipath Pathology';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('lab_listing');
    }

    public function about()
    {
        $data['title'] = 'About Us | Unipath Pathology';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('about');
    }

    public function contact()
    {
        $data['title'] = 'Contact Us | Unipath Pathology';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('contact');
    }

    public function services()
    {
        $data['title'] = 'Services | Unipath Pathology';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('services');
    }

    public function blogs()
    {
        $data['title'] = 'blogs | Unipath Pathology';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('blogs');
    }

    public function blogs_details()
    {
        $data['title'] = 'Blogs Details | Unipath Pathology';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('blogs_details');
    }

    public function privacy_policy()
    {
        $data['title'] = 'Privacy Policy | Unipath Pathology';
        $this->load->view('includes/header-link' , $data);
        $this->load->view('privacy_policy');
    }
}
