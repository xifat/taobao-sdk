<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;
/**
 * TOP API: taobao.alitrip.travel.trade.fullinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2016.12.13
 */
class AlitripTravelTradeFullinfoGetRequest
{
	/** 
	 * 交易ID
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.trade.fullinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
