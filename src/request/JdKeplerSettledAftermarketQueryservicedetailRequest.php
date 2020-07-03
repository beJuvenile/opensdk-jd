<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;
use OpenSDK\JingDong\Request\Dto\JdKeplerSettledAftermarketClientDto;
use OpenSDK\JingDong\Request\Dto\JdKeplerSettledAftermarketQueryServiceDetailDto;

class JdKeplerSettledAftermarketQueryservicedetailRequest implements Request
{
    private $queryServiceDetailParam; // 服务单详细信息查询入参

    private $client; // 客户端信息

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.settled.aftermarket.queryservicedetail';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
		RequestCheckUtil::checkNotNull($this->queryServiceDetailParam, 'queryServiceDetailParam');
	}

	/**
     * @param JdKeplerSettledAftermarketQueryServiceDetailDto $queryServiceDetailParam
	 */
    public function setQueryServiceDetailParam(JdKeplerSettledAftermarketQueryServiceDetailDto $queryServiceDetailParam)
    {
        $this->queryServiceDetailParam = $queryServiceDetailParam->getParams();
        $this->apiParas['queryServiceDetailParam'] = $queryServiceDetailParam->getParams();
    }

    public function getQueryServiceDetailParam()
    {
        return $this->queryServiceDetailParam;
    }

    /**
     * @param JdKeplerSettledAftermarketClientDto $client
     */
    public function setClient(JdKeplerSettledAftermarketClientDto $client)
    {
        $this->client = $client->getParams();
        $this->apiParas['client'] = $client->getParams();
    }

    public function getClient()
    {
        return $this->client;
    }


}