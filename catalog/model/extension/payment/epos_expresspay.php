<?php
class ModelExtensionPaymentEposExpressPay extends Model {
	public function getMethod($address, $total) {
		$this->load->language('extension/payment/epos_expresspay');
		
		$status = true;
				
		$method_data = array();
		
		if ($status) {
			$method_data = array(
				'code'       => 'epos_expresspay',
				'title'      => $this->language->get('text_title'),
				'terms'      => '',
				'sort_order' => $this->config->get('epos_expresspay_sort_order')
			);
		}
		
		return $method_data;
	}
}