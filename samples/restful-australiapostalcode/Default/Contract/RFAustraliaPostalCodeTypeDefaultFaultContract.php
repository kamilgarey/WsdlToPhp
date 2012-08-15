<?php
/**
 * Class file for RFAustraliaPostalCodeTypeDefaultFaultContract
 * @date 15/08/2012
 */
/**
 * Class RFAustraliaPostalCodeTypeDefaultFaultContract
 * @date 15/08/2012
 */
class RFAustraliaPostalCodeTypeDefaultFaultContract extends RFAustraliaPostalCodeWsdlClass
{
	/**
	 * The ErrorId
	 * @var int
	 */
	public $ErrorId;
	/**
	 * The ErrorMessage
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $ErrorMessage;
	/**
	 * The CorrelationId
	 * @var RFAustraliaPostalCodeTypeGuid
	 */
	public $CorrelationId;
	/**
	 * Constructor
	 * @param int ErrorId
	 * @param string ErrorMessage
	 * @param RFAustraliaPostalCodeTypeGuid CorrelationId
	 * @return RFAustraliaPostalCodeTypeDefaultFaultContract
	 */
	public function __construct($_ErrorId = null,$_ErrorMessage = null,$_CorrelationId = null)
	{
		parent::__construct(array('ErrorId'=>$_ErrorId,'ErrorMessage'=>$_ErrorMessage,'CorrelationId'=>$_CorrelationId));
	}
	/**
	 * Set ErrorId
	 * @param int ErrorId
	 * @return int
	 */
	public function setErrorId($_ErrorId)
	{
		return ($this->ErrorId = $_ErrorId);
	}
	/**
	 * Get ErrorId
	 * @return int
	 */
	public function getErrorId()
	{
		return $this->ErrorId;
	}
	/**
	 * Set ErrorMessage
	 * @param string ErrorMessage
	 * @return string
	 */
	public function setErrorMessage($_ErrorMessage)
	{
		return ($this->ErrorMessage = $_ErrorMessage);
	}
	/**
	 * Get ErrorMessage
	 * @return string
	 */
	public function getErrorMessage()
	{
		return $this->ErrorMessage;
	}
	/**
	 * Set CorrelationId
	 * @param guid CorrelationId
	 * @return guid
	 */
	public function setCorrelationId($_CorrelationId)
	{
		return ($this->CorrelationId = $_CorrelationId);
	}
	/**
	 * Get CorrelationId
	 * @return RFAustraliaPostalCodeTypeguid
	 */
	public function getCorrelationId()
	{
		return $this->CorrelationId;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>