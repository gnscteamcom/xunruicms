<?php namespace Phpcmf\Library;

/**
 * http://www.xunruicms.com
 * 本文件是框架系统文件，二次开发时不可以修改本文件，可以通过继承类方法来重写此文件
 **/

/**
 * Http格式化数据类
 */

class Http
{


    public function member_paylog_list($data) {

        $rt = [];
        if ($data['list']) {
            foreach ($data['list'] as $t) {
                $t['inputtime'] = dr_date($t['inputtime']);
                $rt[] = $t;
            }
        }

        return $rt;
    }


    public function member_content_comment($data) {

        $rt = [];
        if ($data['list']) {
            foreach ($data['list'] as $t) {
                $t['thumb'] = dr_thumb($t['thumb'], 200, 200);
                $t['inputtime'] = dr_date($t['inputtime']);
                $rt[] = $t;
            }
        }

        return $rt;
    }


    public function module_comment_list($data) {

        if ($data['list']) {
            foreach ($data['list'] as $i => $t) {
                $t['inputtime'] = dr_date($t['inputtime']);
                $t['avatar'] = dr_avatar($t['uid']);
                $data['list'][$i] = $t;
            }
        }

        return $data;
    }


    public function module_search_news_list($data) {

        $rt = [];
        if ($data['list']) {
            foreach ($data['list'] as $t) {
                $t['thumb'] = dr_thumb($t['thumb'], 200, 200);
                $rt[] = $t;
            }
        }

        return $rt;
    }



}