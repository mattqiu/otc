<?php if (!defined('THINK_PATH')) exit();?><style>
*{line-height:15px;}
</style>
<p style="font-size:16px;text-align:center;font-weight:bold">第一部分 基础资产收益权转让明细</p>
<p>	1.基础资产收益权转让当事方 </p>
<table border="1" cellspacing="0" cellpadding="2"> 
	<tr>
		<td>转让方</td>
		<td>LP</td>
		<td>受让方</td>
		<td><?php echo ($data["k_nam_cust_real"]); ?></td>
	</tr>
	
	<tr>
		<td>证件类型</td>
		<td>12345678901</td>
		<td>证件类型</td>
		<td><?php echo str_replace("1","身份证",$data['k_cod_cust_id_type'])?></td>
	</tr>
	<tr>
		<td>证件编号</td>
		<td>写死</td>
		<td>证件编号</td>
		<td><?php echo ($data["k_cod_cust_id_no"]); ?></td>
	</tr>
	<tr>
		<td>联系地址</td>
		<td>上海地址</td>
		<td>联系地址</td>
		<td><?php echo ($data["k_address"]); ?></td>
	</tr> 
	
	<tr>
		<td>联系方式</td>
		<td>021-58888888</td>
		<td>联系方式</td>
		<td><?php echo ($data["k_tel"]); ?></td>
	</tr>
	</table>
	<p>2.有限合伙基金明细</p>
	
	<table border="1" cellspacing="0" cellpadding="2"> 
	<tr>
		<td>基金名称</td>
		<td colspan="3"><?php echo ($data["name"]); ?></td> 
	</tr> 
	<tr>
		<td>基金管理人</td>
		<td colspan="3"><?php echo ($data["manager"]); ?></td> 
	</tr> 
	<tr>
		<td>基金期限</td>
		<td colspan="3">
		<u><?php echo date("Y",strtotime($data['startdate']))?></u>年<u><?php echo date("m",strtotime($data['startdate']))?></u>月<u><?php echo date("d",strtotime($data['startdate']))?></u>日
		至 
		<u><?php echo date("Y",strtotime($data['endtime']))?></u>年<u><?php echo date("m",strtotime($data['endtime']))?></u>月<u><?php echo date("d",strtotime($data['endtime']))?></u>日
		</td> 
	</tr> 
	<tr>
		<td>募集规模</td>
		<td colspan="3"><u><?php echo $data['all_amount']/10000 ?></u>万元人民币</td> 
	</tr> 
	<tr>
		<td>投资范围</td>
		<td colspan="3"><?php echo ($data["tzfw"]); ?></td> 
	</tr> 
	<tr>
		<td>转让方投资规模</td>
		<td colspan="3">转让方投资规模：<?php echo $data['total_amount']?>元</td> 
	</tr> 
	<tr>
		<td>基金收益分配日</td>
		<td colspan="3"> <u><?php echo ($data["syfpr"]); ?></u> </td> 
	</tr> 
	</table>
	<p>3.基础资产收益权转让交易明细</p>
	
	<table border="1" cellspacing="0" cellpadding="2"> 
	
	
	<tr>
		<td>本协议签署日</td>
		<td colspan="3"><u><?php echo date("Y",strtotime($data['dat_modify']))?></u>年<u><?php echo date("m",strtotime($data['dat_modify']))?></u>月<u><?php echo date("d",strtotime($data['dat_modify']))?></u>日</td> 
	</tr> 
	<tr>
		<td>信息服务方</td>
		<td colspan="3">资邦财盈(上海)资产管理有限公司</td> 
	</tr> 
	<tr>
		<td>转让方托管账户(如有)</td>
		<td colspan="3"></td> 
	</tr> 
	<tr>
		<td>受让方托管账户(如有)</td>
		<td colspan="3"></td> 
	</tr> 
	<tr>
		<td>转让方持有的全部基金份额</td>
		<td colspan="3">合计<u><?php echo $data['total_amount']/10000?></u>万份（即转让人在有限合伙企业占有的合伙企业份额）</td> 
	</tr>
	<tr>
		<td>转让方持有的全部基金份额对应的本金余额</td>
		<td colspan="3">
		合计<u><?php echo $data['total_amount']/10000?></u>万元人民币
		</td> 
	</tr>
	<tr>
		<td>基础资产</td>
		<td colspan="3">本协议项下的基础资产,即<?php echo ($data["name"]); ?></td> 
	</tr>
	<tr>
		<td>转让标的</td>
		<td colspan="3">即本协议项下转让的基础资产收益权</td> 
	</tr>
	<tr>
		<td>转让价款</td>
		<td colspan="3">
		 <?php echo $data['amt_int_total']?>元人民币
		</td> 
	</tr>
	<tr>
		<td>转让日</td>
		<td colspan="3"><u><?php echo date("Y",strtotime($data['dat_modify']))?></u>年<u><?php echo date("m",strtotime($data['dat_modify']))?></u>月<u><?php echo date("d",strtotime($data['dat_modify']))?></u>日</td> 
	</tr> 
	<tr>
		<td>预期年化收益率	</td>
		<td colspan="3"><?php echo ($data["rat_cf_inv_min"]); ?>%</td> 
	</tr> 
	<tr>
		<td>转让期限</td>
		<td colspan="3"><?php echo $amt_time = $data['amt_time']?>个月。期限届满，将由转让方回购。</td> 
	</tr>
	<tr>
		<td>收益转付日（到期日）</td>
		<td colspan="3"><?php echo date("Y-m-d",strtotime("+ ".$amt_time." month - 1 day",strtotime($data['dat_modify'])))?></td> 
	</tr>
</table> 
<br>