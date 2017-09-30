<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;
/**
 * TOP API: taobao.alitrip.travel.trades.increment.get request
 * 
 * @author auto create
 * @since 1.0, 2016.11.03
 */
class AlitripTravelTradesIncrementGetRequest
{
	/** 
	 * 买家nick
	 **/
	private $buyerNick;
	
	/** 
	 * 当前页码
	 **/
	private $currentPage;
	
	/** 
	 * 查询修改结束时间，必须大于修改开始时间(修改时间跨度不能大于一天)，格式:yyyy-MM-dd HH:mm:ss。建议使用30分钟以内的时间跨度，能大大提高响应速度和成功率。
	 **/
	private $endModified;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认值:40;最大值:100
	 **/
	private $pageSize;
	
	/** 
	 * 查询修改开始时间(修改时间跨度不能大于一天)。格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startModified;
	
	/** 
	 * 交易状态，默认查询所有交易状态的数据，除了默认值外每次只能查询一种状态。
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.trades.increment.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endModified,"endModified");
		RequestCheckUtil::checkNotNull($this->startModified,"startModified");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
