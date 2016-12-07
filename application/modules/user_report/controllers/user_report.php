<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class User_Report extends User_Controller
    {
        public function __construct()
		{
			parent::__construct();
			$this->load->model('user_report_m');
			$this->template->set_layout('default');
            $this->load->library('html2pdf');
            $this->load->helper('MY_date_helper');
		}

		public function index()
		{
            $this->data['office_name'] = $this->global_m->getOfficeName();
            $this->data['problem_category'] = $this->global_m->getProblemCategory();
            $this->data['problem_status'] = $this->global_m->getProblemStatus();
            $this->data['menu_report'] = "active";

			$this->data['title'] = 'REPORT';
			$this->template->build('main',$this->data);
		}

		public function byBranchOffice()
        {
            $this->form_validation->set_rules('office_name','Office Name','trim|xss_clean');
            $this->form_validation->set_rules('problem_category','Problem Category','trim|xss_clean');
            $this->form_validation->set_rules('problem_status','Problem Status','trim|xss_clean');
            $this->form_validation->set_rules('day','Per Tanggal','trim|xss_clean');
            
            if($this->form_validation->run($this))
            {
                $this->data['report'] = $this->user_report_m->printByBranchOffice($this->input->post(NULL, TRUE));

                if($this->data['report'] != NULL)
                {
                    ob_start();
                    $this->data['title'] = "SUPORT CENTER <br/> ".strtoupper($this->input->post('office_name'));

                    $content = $this->load->view('ReportBranchOffice',$this->data);
                    $content = ob_get_clean();
                    
                    try
                    {
                        $html2pdf = new HTML2PDF('L', 'A4', 'fr');
                        $html2pdf->pdf->SetDisplayMode('fullpage');
                        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
                        $html2pdf->Output('report-suport-center.pdf');
                    }
                    catch(HTML2PDF_exception $e) {
                        echo $e;
                        exit;
                    }
                }
                else
                {
                    $this->session->set_flashdata('pesan', 'Something went wrong, data not available !!');
                    redirect('user/report');
                }
                
            }
            else
            {
                redirect('404_override');
            }
            
        }

        public function byMonth()
        {
            $this->form_validation->set_rules('month','Month','trim|xss_clean');
            $this->form_validation->set_rules('office_name','Office Name','trim|xss_clean');
            $this->form_validation->set_rules('problem_category','Problem Category','trim|xss_clean');
            if($this->form_validation->run($this))
            {
                $this->data['report'] = $this->user_report_m->printByMonth($this->input->post(NULL, TRUE));
                
                if($this->data['report'] != NULL)
                {
                    ob_start();
                    $this->data['title'] = "SUPORT CENTER <br/> ".strtoupper($this->input->post('office_name'));
                    $content = $this->load->view('ReportPerMonth',$this->data);
                    $content = ob_get_clean();
                    
                    try
                    {
                        $html2pdf = new HTML2PDF('L', 'A4', 'fr');
                        $html2pdf->pdf->SetDisplayMode('fullpage');
                        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
                        $html2pdf->Output('report-suport-center.pdf');
                    }
                    catch(HTML2PDF_exception $e) {
                        echo $e;
                        exit;
                    }
                }
                else
                {
                    $this->session->set_flashdata('pesan', 'Something went wrong, data not available !!');
                    redirect('user/report');
                }
                
            }
            else
            {
                redirect('404_override');
            }
        }

        
	}
