<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getNodeNum() 获取节点数量
 * @method void setNodeNum(integer $NodeNum) 设置节点数量
 * @method integer getInstanceNum() 获取实例数量
 * @method void setInstanceNum(integer $InstanceNum) 设置实例数量
 */

/**
 *节点实例数量信息
 */
class NodeInstanceNum extends AbstractModel
{
    /**
     * @var integer 节点数量
     */
    public $NodeNum;

    /**
     * @var integer 实例数量
     */
    public $InstanceNum;
    /**
     * @param integer $NodeNum 节点数量
     * @param integer $InstanceNum 实例数量
     */
    function __construct()
    {

    }
    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }
    }
}