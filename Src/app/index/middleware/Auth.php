<?php
/**
 * 源码名：caozha-EPACS（疫情防控系统）
 * Copyright © 2020 草札 （草札官网：http://caozha.com）
 * 基于木兰宽松许可证 2.0（Mulan PSL v2）免费开源，您可以自由复制、修改、分发或用于商业用途，但需保留作者版权等声明。详见开源协议：http://license.coscl.org.cn/MulanPSL2
 * caozha-admin (Software Name) is licensed under Mulan PSL v2. Please refer to: http://license.coscl.org.cn/MulanPSL2
 * Github：https://github.com/cao-zha/caozha-epacs   or   Gitee：https://gitee.com/caozha/caozha-epacs
 */

declare (strict_types = 1);

namespace app\index\middleware;

class Auth
{
    /**
     *
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        // 添加前置中间件执行代码
        if(is_login()==false){
            Echo_js("alert('您未登陆会员，请登陆后再操作。');location.href='".url('index/index/login')."';");
        }

        $response =  $next($request);

        // 添加后置中间件执行代码

        return $response;
    }

    public function end(\think\Response $response)
    {
    }
}
