<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia-merchant.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.merchant.staff_list.init();
</script>
<!-- {/block} -->

<!-- {block name="home-content"} -->
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">
			<!-- {if $ur_here}{$ur_here}{/if} -->
			<div class="pull-right">
				{if $action_link}
				<a href="{$action_link.href}" class="btn btn-primary data-pjax">
					<i class="fa fa-plus"></i> {$action_link.text}
				</a>
				{/if}
			</div>
		</h2>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel">
	    	<div class="panel-body">
	        	<div class="row">
	            	<div class="col-sm-3">
	            		 {if $Manager.avatar}
	                	 	<img src="{RC_Upload::upload_url()}/{$Manager.avatar}" alt="头像" style="width:180px;margin-left:25px; margin-top:4px;border-radius:180px;box-shadow:0px 0px 8px #7E7E7E;"/>
	                	 {else}
	                	 	<img src="{$ecjia_main_static_url}img/ecjia_avatar.jpg" alt="头像"  style="width:180px;margin-left:25px; margin-top:4px;border-radius:180px;box-shadow:0px 0px 8px #7E7E7E;" /><br>
	                	 {/if}
	            	</div>
	            	
	            	<div class="col-sm-5">
		                <h4 class="title-real-estates">
                            <strong>{$Manager.name}</strong> <span class="text_center"><small class="label label-warning">店长</small></span>
                        </h4>
	                	<hr style="margin-top: 10px;margin-bottom: 10px;">
	                	<p>{if $Manager.introduction}{$Manager.introduction}{else}店长有点懒哦，赶紧去个人中心完善资料吧~~{/if}</p>
	                	{if $parent_id eq 0}
	                	<p><a class="data-pjax" href='{RC_Uri::url("staff/mh_log/init", "user_id={$Manager.user_id}")}'>查看日志</a> | <a class="data-pjax" href='{RC_Uri::url("staff/merchant/edit", "user_id={$Manager.user_id}&parent_id=0")}'>编辑</a></p>
	                	{/if}
	            	</div>
	            	
	            	<div class="col-sm-4">
		                <h4 class="title-real-estates">
		                    <strong>店长资料</strong>
		                </h4>
	                	<hr style="margin-top: 10px;margin-bottom: 10px;">
	                	<div><label>昵称：</label>{$Manager.nick_name}</div>
	                	<div><label>手机账号：</label>{$Manager.mobile}</div>
	                	<div><label>邮箱账号：</label>{$Manager.email}</div>
	                	<div><label>加入时间：</label>{$Manager.add_time}</div>
	                	<div><label>最后登录时间：</label>{$Manager.last_login}</div>
	            	</div>
	        	</div>
	    	</div>
		</div>
	</div>
</div>

<div class="row" >
	<div class="col-lg-12">
		<div class="panel">
	    	<div class="panel-body">
	    	
				<!-- 内置管理员 -->
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			        <div class="panel-customize">
			            <div class="panel-body">
			            	<div class="customize-img">
			            		<img src="{$staff_admin}">
			            	</div>
			            	
                            <div class="task-thumb-details">
                                 <h4><strong>未分组</strong></h4>
                                 <span class="label label-success">已有<span class="staff-count">{$staff_count.unclassified}</span>个账号</span>
                            </div>  
                            
			                <div class="title-realestates-columns">
			                    <hr>
			                    <p>赶快对未进行的分组的员工进行分组吧。</p>
			                </div>
			                
			                <div class="footer-realestates-columns">
			                    <div class="row">
			                    	<div class="col-sm-6">
			                            <a href='{url path="staff/merchant/add" args="step=1"}' class="btn btn-primary btn-block">新增账号</a>
			                        </div>
			                        <div class="col-sm-6">
			                            <a href='{url path="staff/merchant/init" args="group_id=0"}' class="btn btn-default-staff btn-block">管理账号</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    
				<!-- 内置配送员 -->
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			        <div class="panel-customize">
			            <div class="panel-body">
			            	<div class="customize-img">
			           			<img src="{$staff_express}" >
			           		</div>
			           		
                            <div class="task-thumb-details">
                                 <h4><strong>配送员</strong></h4>
                                 <span class="label label-success">已有<span class="staff-count">{$staff_count.express}</span>个账号</span>
                            </div>  
                            
			                <div class="title-realestates-columns">
			                    <hr>
			                    <p>配送员具有抢单、接收派单等权限。</p>
			                </div>
			                
			                <div class="footer-realestates-columns">
			                    <div class="row">
			                    	<div class="col-sm-6">
			                            <a href='{url path="staff/merchant/add" args="step=1"}' class="btn btn-primary btn-block">新增账号</a>
			                        </div>
			                        <div class="col-sm-6">
			                            <a href='{url path="staff/merchant/init" args="group_id=-1"}' class="btn btn-default-staff btn-block">管理账号</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    
			    <!-- 内置收银员 -->
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			        <div class="panel-customize">
			            <div class="panel-body">
			              	<div class="customize-img">
			            		<img src="{$staff_cashdesk}" >
			            	</div>
                            <div class="task-thumb-details">
                                 <h4><strong>收银员</strong></h4>
                                 <span class="label label-success">已有<span class="staff-count">{$staff_count.cashdesk}</span>个账号</span>
                            </div> 
                            
			                <div class="title-realestates-columns">
			                    <hr>
			                    <p>收银员具有后台商家结算等各项资金操作权限，请谨慎配置。</p>
			                </div>
			                
			                <div class="footer-realestates-columns">
			                    <div class="row">
			                    	<div class="col-sm-6">
			                            <a href='{url path="staff/merchant/add" args="step=1"}' class="btn btn-primary btn-block">新增账号</a>
			                        </div>
			                        <div class="col-sm-6">
			                            <a href='{url path="staff/merchant/init" args="group_id=-2"}' class="btn btn-default-staff btn-block">管理账号</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    
			    <!--手动添加员工组列表 -->
			    <!-- {foreach from=$staff_group_list.staff_group_list item=list} -->
				    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				        <div class="panel-customize">
				            <div class="panel-body">
				              	<div class="customize-img">
				            		<img src="{$staff_admin}" >
				            	</div>
	                            <div class="task-thumb-details">
	                                 <h4><strong>{$list.group_name}<a href='{url path="staff/mh_group/edit" args="group_id={$list.group_id}"}'><img src="{$staff_edit}"></a></strong></h4>
	                                 <span class="label label-success">已有<span class="staff-count">{$list.staff_count}</span>个账号</span>
	                            </div> 
	                            
				                <div class="title-realestates-columns">
				                    <hr>
				                    <p>{$list.groupdescribe}</p>
				                </div>
				                
				                <div class="footer-realestates-columns">
				                    <div class="row">
				                    	<div class="col-sm-6">
				                            <a href='{url path="staff/merchant/add" args="step=1"}' class="btn btn-primary btn-block">新增账号</a>
				                        </div>
				                        <div class="col-sm-6">
				                            <a href='{url path="staff/merchant/init" args="group_id={$list.group_id}"}' class="btn btn-default-staff btn-block">管理账号</a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
			    <!-- {/foreach} -->
			    
			    <!--自定义添加入口 -->
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			        <div class="panel-customize">
			            <div class="panel-body">
			            	<div class="customize-plus">
			            		<a href="{url path='staff/mh_group/add'}"><img src="{$staff_plus}" ></a>
			            		<h4>自定义</h4>
			            	</div>
			            	
			                <div class="title-realestates-columns">
			                    <p>配置自定义角色，并在该角色下添加员工账号，灵活管理后台权限。</p>
			                </div>
			            </div>
			        </div>
			    </div>
			   	<span class="help-block">注：所有组的员工加起来最多只能添加10个员工</span> 
	    	</div>
		</div>
	</div>
</div>

<!-- {/block} -->