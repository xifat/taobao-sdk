<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;
/**
 * TOP API: alitrip.travel.trade.query request
 * 
 * @author auto create
 * @since 1.0, 2017.03.16
 */
class AlitripTravelTradeQueryRequest
{
	/** 
	 * 主订单id
	 **/
	private $orderId;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function getApiMethodName()
	{
		return "alitrip.travel.trade.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
