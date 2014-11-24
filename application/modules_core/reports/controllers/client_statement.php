<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Client_Statement extends Admin_Controller {

	public function __construct() {

		parent::__construct();

	}

	public function index() {

		$this->load->model('clients/mdl_clients');

		$data = array(
			'output_types' => array('pdf', 'view')
		);

		$this->load->view('client_statement', $data);

	}

	public function jquery_display_results($output_type = 'view', $client_id = NULL, $include_closed_invoices, $include_quotes) {

		$this->load->model(array('invoices/mdl_invoices', 'reports/mdl_client_statement'));

		$include_closed_invoices = ($include_closed_invoices == 'undefined') ? FALSE : TRUE;
		$include_quotes = ($include_quotes == 'undefined') ? FALSE : TRUE;

		$invoices = $this->mdl_client_statement->get_invoices($client_id, $include_closed_invoices, $include_quotes);

		$totals = $this->mdl_client_statement->get_totals($invoices);

		$data = array(
			'invoices' => $invoices,
			'totals' => $totals
		);

		if ($output_type == 'view') {

			$this->load->view('client_statement_view', $data);

		}

		elseif ($output_type == 'pdf') {

			$this->load->helper($this->mdl_mcb_data->setting('pdf_plugin'));

			$html = $this->load->view('client_statement_pdf', $data, TRUE);

			pdf_create($html, url_title($this->lang->line('client_statement'), '_'), TRUE);

		}

	}

}

?>