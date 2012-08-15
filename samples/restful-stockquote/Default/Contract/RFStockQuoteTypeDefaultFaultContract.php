<?php
/**
 * Class file for RFStockQuoteTypeDefaultFaultContract
 * @date 15/08/2012
 */
/**
 * Class RFStockQuoteTypeDefaultFaultContract
 * @date 15/08/2012
 */
class RFStockQuoteTypeDefaultFaultContract extends RFStockQuoteWsdlClass
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
	 * @var RFStockQuoteTypeGuid
	 */
	public $CorrelationId;
	/**
	 * Constructor
	 * @param int ErrorId
	 * @param string ErrorMessage
	 * @param RFStockQuoteTypeGuid CorrelationId
	 * @return RFStockQuoteTypeDefaultFaultContract
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
	 * @return RFStockQuoteTypeguid
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