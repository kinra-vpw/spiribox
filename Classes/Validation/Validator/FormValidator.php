<?php
namespace SpiriBox\Spiribox\Validation\Validator;

class FormValidator extends Tx_Extbase_Validation_Validator_AbstractValidator
{
	public function isValid($value)
	{
		$this->errors = array();
		if(preg_match('#([^0-9\-\+\(\)\s])#', $value))
		{
			$this->addError('The given subject is no valid value.', 40213131);
			return false;
		}
		return true;
	}
}