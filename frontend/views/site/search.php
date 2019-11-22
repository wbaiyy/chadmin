<?php
/**
 * Created by PhpStorm.
 * User: wangbin
 * Date: 2019/10/26
 * Time: 17:04
 */
?>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">主要口径<strong class="caret"></strong></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#">整体</a>
                </li>
                <li>
                    <a href="#">分区</a>
                </li>
                <li>
                    <a href="#">环比</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">次要口径<strong class="caret"></strong></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#">企业规模</a>
                </li>
                <li>
                    <a href="#">企业制度类型</a>
                </li>
                <li>
                    <a href="#">企业生产类型</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">指标属性<strong class="caret"></strong></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#">完成</a>
                </li>
                <li>
                    <a href="#">增幅</a>
                </li>
                <li>
                    <a href="#">下跌</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">排序规则<strong class="caret"></strong></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#">正序</a>
                </li>
                <li>
                    <a href="#">反序</a>
                </li>
            </ul>
        </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
请选择时间：
        <div class="form-group">
            <input type="text" class="form-control" placeholder="2018-01-01"/> -
            <input type="text" class="form-control" placeholder="2019-01-01"/>
        </div>
        <button type="submit" class="btn btn-default">分析</button>
    </form>
</div>