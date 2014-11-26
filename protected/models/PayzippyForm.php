<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PayzippyForm extends CFormModel {
    public $buyer_email_address;
    public $transaction_amount;
    public $payment_method;
    public $bank_name;
    public $merchant_transaction_id;
    public $ui_mode;
    
    public function rules(){
        return array(
                        //bellow fields are required
			array('buyer_email_address,transaction_amount,payment_method,bank_name,merchant_transaction_id,ui_mode', 'required'),
                        //validate email address
			array('buyer_email_address', 'email'),
                        //validate transaction_amount as numerical
			array('transaction_amount', 'numerical'),
			array('payment_method,bank_name,merchant_transaction_id,ui_mode', 'length'),
		);
    }
    public function attributeLabels()
	{
		return array(
			'buyer_email_address'=>'buyer email address',
			'transaction_amount'=>'transaction amount',
			'payment_method'=>'payment_method',
			'bank_name'=>'bank_name',
			'merchant_transaction_id'=>'merchant transaction id',
			'ui_mode'=>'ui mode',
		);
	}

}

?>
