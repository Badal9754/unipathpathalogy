<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home | Unipath Pathology';

        if (count($_POST) > 0) {
            $postdata = $this->input->post();
            $insert = $this->CommonModal->insertRowReturnId('appointment', $postdata);
            if ($insert) {
                flashMultiData(['success_status' => "success", 'msg' => " Query Submitted"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Something Went Wrong."]);
            }
            redirect($_SERVER['HTTP_REFERER']);
        }

        $this->load->view('includes/header-link', $data);
        $this->load->view('home');
    }


    public function lab_listing()
    {
        $data['title'] = 'Lab Listing | Unipath Pathology';
        $this->load->view('includes/header-link', $data);
        $this->load->view('lab_listing');
    }

    public function about()
    {
        $data['title'] = 'About Us | Unipath Pathology';
        $this->load->view('includes/header-link', $data);
        $this->load->view('about');
    }

    public function contact()
    {
        $data['title'] = 'Contact Us | Unipath Pathology';

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules(
                'phone',
                'Phone',
                'required|regex_match[/^[0-9]{10}$/]',
                ['regex_match' => 'Phone must be a 10-digit number.']
            );
            $this->form_validation->set_rules('packages', 'Test Packages', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required|trim');

            if ($this->form_validation->run() === FALSE) {
                flashMultiData([
                    'success_status' => "error",
                    'msg' => validation_errors()
                ]);
            } else {
                $postdata = $this->input->post();
                $insert = $this->CommonModal->insertRowReturnId('contact_query', $postdata);
                if ($insert) {
                    flashMultiData(['success_status' => "success", 'msg' => "Query Submitted"]);
                } else {
                    flashMultiData(['success_status' => "error", 'msg' => "Something Went Wrong."]);
                }
            }
            redirect($_SERVER['HTTP_REFERER']);
        }

        $this->load->view('includes/header-link', $data);
        $this->load->view('contact');
    }


    public function services()
    {
        $data['title'] = 'Services | Unipath Pathology';
        $data['allService'] = $this->CommonModal->getAllRowsInOrder('service', 'blog_id', 'DESC');
        $this->load->view('includes/header-link', $data);
        $this->load->view('services');
    }

    public function blogs()
    {
        $data['title'] = 'blogs | Unipath Pathology';
        $data['allBlogs'] = $this->CommonModal->getAllRowsInOrder('blogs', 'blog_id', 'DESC');
        $this->load->view('includes/header-link', $data);
        $this->load->view('blogs');
    }

    public function blogs_details($slug_title)
    {
        $data['title'] = 'Blogs Details | Unipath Pathology';
        $data['blogdetails'] = $this->CommonModal->getSingleRowById('blogs', array('slug_title' => $slug_title));
        $this->load->view('includes/header-link', $data);
        $this->load->view('blogs_details');
    }

    public function privacy_policy()
    {
        $data['title'] = 'Privacy Policy | Unipath Pathology';
        $this->load->view('includes/header-link', $data);
        $this->load->view('privacy_policy');
    }
}
