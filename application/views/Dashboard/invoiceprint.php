<div class="row">
		<div class="col-sm-12 hide_button" align="center" style="margin-top: 10px">
            <button class="btn btn-danger print_button" onclick="window.print();">Print</button>
        </div>
        <div style="clear: both; height: 5px"></div>
		    		<p class="single_record">
			<table border="1" align="center" class="myfont table_" cellpadding="10">
				<tbody><tr>
					<td>
						<table border="0" class="myfont table_" style="border:#009900 solid 0px">
							<tbody><tr>
			
								<td align="left">
								</td>
								<td style="text-align: center">
									<h1><b>INVOICE</b></h1>
									<b style="font-size: 12px">
										(May, 2019)
									</b>
									<h4><b style="font-size: 12px">Fee Management System</b></h4>
								</td>
								<td align="right">
								</td>
							</tr>
							<tr>
								<td class="myline_" colspan="3"></td>
							</tr>
							<tr>
								<td colspan="3">
									<table border="0" class="myfont table_" style="border:#009900 solid 0px; font-size: 12px; font-weight: bold">
										<tbody><tr>
											<td>Invoice 
												<?php 
												foreach($students as $item)
												{
													$item->invoice_ID;
												}
												?></td>
											<td></td>
											<td align="right">Date: 03/05/2019</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td class="myline_" colspan="3"></td>
							</tr>
							<tr>
								<td style="height: 5px" colspan="3"></td>
							</tr>
							<tr>
								<td colspan="3" valign="top">
									<table border="0" class="myfont table_" style="border:#009900 solid 0px; font-size: 12px; font-family: &quot;Times New Roman&quot;">
										<tbody><tr>
											<td valign="top">
												<div style="float:left; font-size: 15px; padding: 0px 0px 10px 0px">To,</div>
												<div style="clear: both"></div>
												<div style="display: block; float: left">
												Aditya Singh xx,<br>
												Reg. No. - 2018071438,<br>
												CLASS (Nursery),<br>
												</div>
											</td>
																						<td valign="top" align="right">
											<b>
											Invoice Date: 01/05/2019											</b>
											</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td style="height: 5px" colspan="3"></td>
							</tr>
							<tr>
								<td colspan="3">
									<table border="0" class="myfont table_" width="700" height="25" style="border:#009900 solid 0px; font-size: 13px;">
										<tbody><tr>
											<th class="myline_" colspan="3"></th>
										</tr>
										<tr style="font-weight: bold">
											<th class="sno_ bgcolor_">SNO</th>
											<th class="particular_ bgcolor_" style="width: 475px; padding: 0px 3px">Particulars</th>
											<th class="amount_ bgcolor_" align="right" style="padding: 0px 3px">Amount (Rs.)</th>
										</tr>
																																											
																																																																																																													
											
											
																							<tr>
													<td class="sno_">1</td>
													<td style="width:60px; text-align: right;">
														<div class="content_"><span class="label_">Compulsory Heads</span><br>ADMISSION<span class="times_">(1 time)</span><br></div>
														<div class="content_r"><br>1000.00<br></div>
													</td>
													<td style="text-align: right; vertical-align: bottom;">1000.00</td>
												</tr>	
																					<tr>
											<td colspan="3" style="padding:10px 0px"></td>
										</tr>
																																												
											
											
																																			<tr style="height: 50px;">
													<td colspan="3">&nbsp;</td>
												</tr>
																															<tr>
											<td colspan="3" style="height: 120px"></td>
										</tr>
																				<tr>
											<td class="myline_" colspan="3"></td>
										</tr>
										<tr>
											<td colspan="3">
												<div style="float: left; width: 545px; text-align: right; font-weight: bold">Total</div>
												<div style="float: right; width: 140px; text-align: right;font-weight: bold">1000.00</div>
											</td>
										</tr>
										<tr>
											<td colspan="3" style="height: 10px; text-align: right; vertical-align: top; font-size: 9px">
											    													(One Thousand)
																							</td>
										</tr>
										<tr>
											<td class="myline_" colspan="3"></td>
										</tr>
										<tr>
											<td colspan="3" style="height: 10px;"></td>
										</tr>
										<tr>
											<td colspan="3">
												<table border="0" cellpadding="5" class="table_" style="border:#009900 solid 0px">
													<tbody><tr>
														<td colspan="2" class="address_contact" width="50%">
															<b>Address</b><br> 
															The Demo School, Haldwani, UTTARAKHAND (INDIA)															<br>
															<b>Contact</b>: 90129 72556<br>
															<b>Email</b>: ttchld@gmail.com<br>
														</td>
														<td colspan="2" width="50%" align="right" valign="bottom" style="font-size: 12px">Authorized Signatory</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
										<tr>
											<td class="myline_" colspan="4"></td>
										</tr>
										<tr>
											<td colspan="3" class="optionalNote">
												*Optional fee is not compulsory for student. Those student enrolled for additional facilities are required to submit the same.
											</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
						</tbody></table>
					</td>
				</tr>
				<tr>
					<td align="right" style="font-size: 10px">
						<b>Note</b>: This Invoice is generated for 1 Month.
					</td>
				</tr>
			</tbody></table>
			</p>
			<div class="col-sm-2"></div>
			<div style="clear: both; height: 45px"></div>
				<div class="col-sm-12 hide_button" style="margin-top: 10px">
            <button class="btn btn-danger print_button" onclick="window.print();">Print</button>
        </div>
		</div>