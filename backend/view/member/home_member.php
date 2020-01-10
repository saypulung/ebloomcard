				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Member</li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									<div class="page-header">
										<h1>
											Member
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												List
											</small>
										</h1>
									</div><!-- /.page-header -->
									<div class="col-xs-12">
										
										<table id="" class="table data-table table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														No
													</th>
													<th>Nama Member</th>
													<th>Tanggal Lahir</th>
													<th>Alamat</th>
													<th>Telepon</th>
													<th>Email</th>
													<th>Tanggal Ditambah</th>
													
												</tr>
											</thead>

											<tbody>
												<?php
												if(is_array($data_member) && count($data_member)>0){
													$no = 0 ;
													foreach ($data_autobus as $row) {
														$no++;
														?>
														<tr>
															<td><?php echo $no?></td>
															<td><?php echo $row->nama_member?></td>
															<td><?php echo date_mysql_to_id($row->tanggal_lahir,'d F Y')?></td>
															<td><?php echo $row->alamat?></td>
															<td><?php echo $row->telepon?></td>
															<td><?php echo $row->email?></td>
															<td><?php echo date_mysql_to_id($row->member_timestamp,'d F Y H:i')?></td>
															
														</tr>
														<?php
													}
												}
												?>
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->
					</div><!-- /.page-content -->
