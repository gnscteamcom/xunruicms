<?php

/**
 * 自定义分页标签样式
 *
 * 参数说明:http://codeigniter.org.cn/user_guide/libraries/pagination.html
 */

return array(

	// 自定义“统计”链接
	'total_link' => '共%s条', // 你希望在分页中显示“统计”链接的名字。如果你不希望显示, 可以把它的值设为 FALSE
	'total_tag_open' => '<li>', // “统计”链接的打开标签
	'total_tag_close' => '</li>', // “统计”链接的关闭标签
	
	// 自定义“下一页”链接
	'next_link' => '下一页', // 你希望在分页中显示“下一页”链接的名字。如果你不希望显示, 可以把它的值设为 FALSE
	'next_tag_open' => '<li>', // “下一页”链接的打开标签
	'next_tag_close' => '</li>', // “下一页”链接的关闭标签
	
	// 自定义“上一页”链接
	'prev_link' => '上一页', // 你希望在分页中显示“上一页”链接的名字。如果你不希望显示, 可以把它的值设为 FALSE
	'prev_tag_open' => '<li>', // “上一页”链接的打开标签
	'prev_tag_close' => '</li>', // “上一页”链接的关闭标签
	
	// 自定义“当前页”链接
	'cur_tag_open' => '<li class="active"><a>', // “当前页”链接的打开标签
	'cur_tag_close' => '</a></li>', // “当前页”链接的关闭标签
	
	// 自定义“数字”链接
	'num_tag_open' => '<li>', // “数字”链接的打开标签
	'num_tag_close' => '</li>', // “数字”链接的关闭标签
	
	// 自定义“最后一页”链接
	'last_link' => '最后一页', // 你希望在分页的右边显示“最后一页”链接的名字。如果你不希望显示, 可以把它的值设为 FALSE
	'last_tag_open' => '<li>', // “最后一页”链接的打开标签
	'last_tag_close' => '</li>', // “最后一页”链接的关闭标签
	
	// 自定义“第一页”链接
	'first_link' => '第一页', // 你希望在分页的左边显示“第一页”链接的名字。如果你不希望显示, 可以把它的值设为 FALSE
	'first_tag_open' => '<li>', // “第一页”链接的打开标签
	'first_tag_close' => '</li>', // “第一页”链接的关闭标签
	
	// 是否显示数字链接
	'display_pages' => TRUE,

    // 显示的分页数字个数
    'num_links' => 4,
	
	// 区域标签
    'full_tag_open' => '<ul class="pagination">',

	// 区域标签
    'full_tag_close' => '</ul>',

);