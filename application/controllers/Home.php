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
    public function business_partnership()
    {
        $data['title'] = 'Business Partnership | Unipath Pathology';
        $this->load->view('includes/header-link', $data);
        $this->load->view('business_partnership');
    }
    public function franchise()
    {
        $data['title'] = 'Franchise | Unipath Pathology';
        $data['state'] = $this->CommonModal->getAllRows('tbl_state');
        $this->load->view('includes/header-link', $data);
        $this->load->view('franchise');
    }
    public function corporate_tie_up()
    {
        $data['title'] = 'Corporate Tie Up | Unipath Pathology';
        $this->load->view('includes/header-link', $data);
        $this->load->view('corporate_tie_up');
    }
    public function hospital_tie_up()
    {
        $data['title'] = 'Hospital Tie Up | Unipath Pathology';
        $this->load->view('includes/header-link', $data);
        $this->load->view('hospital_tie_up');
    }

    public function contact()
    {
        $data['title'] = 'Contact Us | Unipath Pathology';

        if (count($_POST) > 0) {
            $postdata = $this->input->post();
            $insert = $this->CommonModal->insertRowReturnId('contact_query', $postdata);
            if ($insert) {
                flashMultiData(['success_status' => "success", 'msg' => " Query Submitted"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Something Went Wrong."]);
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

    public function getcities()
    {
        $city = $this->CommonModal->getRowById('cities', 'state_id', $this->input->post('stateID'));
        foreach ($city as $city_nm) {
            echo '<option value="' . $city_nm['id'] . '">' . $city_nm['name'] . '</option>';
        }
    }
}