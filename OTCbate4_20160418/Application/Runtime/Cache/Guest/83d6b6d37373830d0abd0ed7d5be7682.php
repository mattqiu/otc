<?php if (!defined('THINK_PATH')) exit();?> 
<!-- <h2>邮编：</h2>
<h2>地址：</h2> 
<h3> ___<?php echo ($data["k_nam_cust_real"]); ?>___<b>(女士/先生)</b> 亲启</h3><br/> -->
<!-- <h1 align="center">债权出让及受让协议</h1> -->
    尊敬的  ___<u><?php echo ($data["k_nam_cust_real"]); ?></u>____   （女士/先生）   您好：
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通过资邦（上海）投资咨询有限公司的信用评估及筛选，推荐您通过受让他人既有的个人间借贷合同的方式，出借资金给如下借款人，详见“本次出让债权列表”。
在您接受该批债权出让并按约定时间支付全部对价的情况下，预借您的出借获益情况如下：（货币单位：人民币元整）</p>

<table border="1" cellspacing="0" cellpadding="2" align="center"> 
		<tr>
			<td width="16%">出借编号</td>
			<td width="15%">资金出借<br/>及回收方式</td>
			<td width="12%">出借日期</td>
			<td width="12%">下一个<br/>资金报告日</td>
			<td width="11%">初始出借<br/>金额</td>
			<td width="11%">下一报告日内<br/>借款人应还款额</td>
			<td width="11%">账户<br/>管理费</td>
			<td width="12%">下一报告日<br/>您的<br/>资产总值</td>
		</tr>

		<tr>
			<td><?php echo ($data["ivs_order"]); ?></td>
			<td><?php echo ($data["periodname"]); ?></td>
			<td><?php echo $date1 = substr($data['dat_modify'],0,10);?></td>
			<td><?php echo ($data["nextday"]); ?></td>
			<td><?php echo ($data["amt_int_total"]); ?></td>
			<!-- //一个月的利息 -->
			<td>
			<?php  $npay = ($data['amt_int_total']*$data['rat_cf_inv_min']/100)/$data['amt_time']; $epay = $data['amt_int_total']/$data['amt_time']; $nextpay = $npay + $epay; echo number_format($nextpay,2); ?></td>
			<td>0.00</td>
			<td><?php $total = $data['amt_int_total']+$nextpay; echo number_format($total,2); ?></td>
		</tr>
		


</table> 




<br/>
<br/>
	<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		转让人：邬成丰
		</td>
		<td>身份证（护照）号码：330226198306191434</td>
	</tr>
	<tr>
		<td>
		受让人：<?php echo ($data["k_nam_cust_real"]); ?>
		</td>
		<td>身份证（护照）号码：<?php echo ($data["k_cod_cust_id_no"]); ?></td>
	</tr>

	</table>
<br/>
<br/>
<table  border="1" cellspacing="0" cellpadding="2"  align="center">
	<tr><td colspan="10" align="center">债权基本信息</td></tr>
		<tr height='30%'>
			<td style="width:20px">序号</td>
			<td style="width:50px">借款人姓名（公司名称）</td>
			<td style="width:90px">借款人（企业法人）<br/>
身份证号码/统一社会信用代码</td>
			<!-- （企业法人）/统一社会信用代码 -->
			<td style="width:60px">初始借款<br/>金额</td>
			<td>本次转让债权价值</td>
			<td>需支付对价</td>
			<td>借款属性</td>
			<td>借款人借款用途</td>
			<td style="width:30px">预计债权年收益率</td>
			<td style="width:19px;">剩余还款月</td>
		</tr>		
		<?php  $count = 0; ?>

		<!-- foreach($ivsData as $k=>$v){?> -->
		<?php if(is_array($ivsData)): $k = 0; $__LIST__ = $ivsData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
			<?php  $count += $v['amt_ivs']; ?>
			<td><?php echo ($k); ?></td>
			<td><?php echo ($v["z_borrower"]); ?></td>
			<td><?php echo ($v["k_cod_cust_id_no"]); ?></td>
			<td><?php echo ($v["amt_cf_inv_price"]); ?></td>
			<td><?php echo ($v["amt_ivs"]); ?></td>
			<td><?php echo ($v["amt_ivs"]); ?></td>
			<td><?php echo ($v["attr"]); ?></td><!-- 属性 -->
			<td><?php echo ($v["use"]); ?></td>
			<td><?php echo ($v["rat_cf_inv_min"]); ?></td>
			<td><?php echo ($v["leftmonth"]); ?></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>

		<tr>
			<td colspan="4" align="center">合计</td>
			
			<td>
				<?php echo addZero($count);?>
				</td>
			<td>
				<?php echo addZero($count);?>
			</td>
			<td colspan="4"></td>
		</tr>

	
			
</table>
			
<p>
<b>本次转让债权列表：</b>本协议转让人自愿将上述债权转让给受让人。受让人如对上述债权无异议，须于       前将上述对价共计人民币（大写）___<u><?php echo cny($data['amt_int_total']);?></u>____元整（人民币小写￥____<u><?php echo cny($data['amt_int_total']);?></u>____ ） 支付到<br/>转让人指定帐户。如资金实际到账日期晚于__<u><?php echo $date1;?></u>___,则以资金实际到账日期为出借日期，<br/>并产品到期日期一同顺延。
</p>

<p>户名（与转让人姓名一致）：邬成丰</p>
<p>
开户银行（精确到支行）：中国招商银行浦东大道分行</p>
<p>
账号：6212-8621-0395-6789</p>
<p>
自款项到账之日起，上述债权转让即生效；债权生效后，署有转让人签章的本文件即代表受让人对上述债权的所有权。
转让人特此声明。本协议一式二份，转让人及受让人各执一份。
				
</p>
<p>
	<table border="0" cellspacing="0" cellpadding="0" > 
		<tr>
			<td width="12%" >转让人:</td>
			<td width="38%" >邬成丰</td>
			<td width="12%">受让人:</td>
			<td width="38%" ><?= $data['k_nam_cust_real'] ?></td>
		</tr> 
		<tr>
			<td >签章:</td>
			<td ><img src="wcf.gif" alt=""  ></td>
			<td >签字:</td>
			<td><?php echo '<?'; ?>
  $data['k_nam_cust_real'] ?></td>
		</tr> 
		<tr>
			<td>日期：</td>
			<td></td>
			<td>日期：</td>
			<td></td>
		</tr>
		<tr>
			<td ><b>见证人：</b></td>
			<td colspan ="3"><b>资邦（上海）投资咨询有限公司</b></td>
		</tr>
		<tr>
			<td ><b>盖章：</b></td>
			<td colspan ="3"></td>
		</tr>
		<tr>
			<td ><b>日期：</b></td>
			<td colspan ="3"></td>
		</tr>
	</table>
</p>