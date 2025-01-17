<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminHome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (sessionId('admin_id') == "") {
			redirect("admin");
		}
		date_default_timezone_set("Asia/Kolkata");
	}
	public function dashboard()
	{
		
		$getRows['title'] = "Home";
	
		$this->load->view('admin/index', $getRows);
	}
	public function blog_All()
	{
		$dID = $this->input->get('dID');
		if (isset($dID)) {
			$update = $this->CommonModal->deleteRowById('blogs', ['blog_id' => decryptId($dID)]);
			redirect('blog_All');
			exit;
		}
		$get['all_blogs'] = $this->CommonModal->getRowByIdInOrder('blogs', [],  'blog_id', 'DESC');
		$get['title'] = 'All blogs';
		$get['setting'] = $this->setting;
		$this->load->view('admin/blog_All', $get);
	}
	public function blog_Add()
	{
		$id = $this->input->get('id');
		if (isset($id)) {
			$data['title'] = 'Edit blogs';
			$decrypt_id = decryptId($id);
			$getblogs = $this->CommonModal->getSingleRowById('blogs', "blog_id = '$decrypt_id'");
		} else {
			$data['title'] = 'Add blogs';
			$getblogs = false;
		}
		$data['setting'] = $this->setting;
		$data['title'] = set_value('title') == false ? @$getblogs['title'] : set_value('title');		
		$data['description'] = set_value('description') == false ? @$getblogs['description'] : set_value('description');		
		$data['image'] = set_value('image') == false ? @$getblogs['image'] : set_value('image');
		if (count($_POST) > 0) {
			extract($this->input->post());
			$post['title'] = $title;
			$post['slug_title'] = url_title($title, '-', true);		
			$post['description'] = $description;
			if ($_FILES['image']['name'] != '') {
				$post['image'] = imageUpload('image', 'upload/blog/' );
			}
			if (isset($id)) {
				$update = $this->CommonModal->updateRowById('blogs', 'blog_id', $decrypt_id, $post);
				flashData('errors', 'Produce update successfully');
			} else {
				$p_id = $this->CommonModal->insertRowReturnIdWithClean('blogs', $post);

				flashData('errors', 'blogs   added');
			}
			redirect('blog_All');
		}
		$this->load->view('admin/blog_add', $data);
	}
	public function service_All()
	{
		$dID = $this->input->get('dID');
		if (isset($dID)) {
			$update = $this->CommonModal->deleteRowById('service', ['blog_id' => decryptId($dID)]);
			redirect('service_All');
			exit;
		}
		$get['all_blogs'] = $this->CommonModal->getRowByIdInOrder('service', [],  'blog_id', 'DESC');
		$get['title'] = 'All Service';
		$get['setting'] = $this->setting;
		$this->load->view('admin/service_All', $get);
	}
	public function service_add()
	{
		$id = $this->input->get('id');
		if (isset($id)) {
			$data['title'] = 'Edit Service';
			$decrypt_id = decryptId($id);
			$getblogs = $this->CommonModal->getSingleRowById('service', "blog_id = '$decrypt_id'");
		} else {
			$data['title'] = 'Add Service';
			$getblogs = false;
		}
		$data['setting'] = $this->setting;
		$data['title'] = set_value('title') == false ? @$getblogs['title'] : set_value('title');		
		$data['description'] = set_value('description') == false ? @$getblogs['description'] : set_value('description');		
		$data['image'] = set_value('image') == false ? @$getblogs['image'] : set_value('image');
		if (count($_POST) > 0) {
			extract($this->input->post());
			$post['title'] = $title;
			$post['slug_title'] = url_title($title, '-', true);		
			$post['description'] = $description;
			if ($_FILES['image']['name'] != '') {
				$post['image'] = imageUpload('image', 'upload/service/' );
			}
			if (isset($id)) {
				$update = $this->CommonModal->updateRowById('service', 'blog_id', $decrypt_id, $post);
				flashData('errors', 'Produce update successfully');
			} else {
				$p_id = $this->CommonModal->insertRowReturnIdWithClean('service', $post);

				flashData('errors', 'blogs   added');
			}
			redirect('service_All');
		}
		$this->load->view('admin/service_add', $data);
	}

	public function contact_query()
	{
		$data['contact'] = $this->CommonModal->getRowByIdInOrder('contact_query', [], 'cid', 'DESC');
		$data['title'] = 'Contact Page Query';
		if (isset($_GET['BdID'])) {
			$BdID = $this->input->get('BdID');
			if (decryptId($BdID) != '') {
				$delete = $this->CommonModal->deleteRowById('contact_query', array('cid' => decryptId($BdID)));
				redirect('contact_query');
				exit;
			}
		}
		$this->load->view('admin/contact_query', $data);
	}
	public function appointment_query()
	{
		$data['contact'] = $this->CommonModal->getRowByIdInOrder('appointment', [], 'id', 'DESC');
		$data['title'] = 'Contact Page Query';
		if (isset($_GET['BdID'])) {
			$BdID = $this->input->get('BdID');
			if (decryptId($BdID) != '') {
				$delete = $this->CommonModal->deleteRowById('appointment', array('id' => decryptId($BdID)));
				redirect('appointment_query');
				exit;
			}
		}
		$this->load->view('admin/appointment_query', $data);
	}
	public function career_query()
	{
		$data['career'] = $this->CommonModal->getRowByIdInOrder('career', [], 'id', 'DESC');
		$data['title'] = 'Contact Page Query';
		if (isset($_GET['BdID'])) {
			$BdID = $this->input->get('BdID');
			if (decryptId($BdID) != '') {
				$delete = $this->CommonModal->deleteRowById('career', array('id' => decryptId($BdID)));
				redirect('career_query');
				exit;
			}
		}
		$this->load->view('admin/career_query', $data);
	}
}
