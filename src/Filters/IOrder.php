<?php

namespace Phpno1\Repository\Filters;

/**
 * 排序操作接口
 * IOrder interface
 */
interface IOrder 
{
    public function order($entity, $direction);
}