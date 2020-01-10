				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Autobus</li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									<div class="page-header">
										<h1>
											Autobus
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												List
											</small>
										</h1>
									</div><!-- /.page-header -->
									<div class="col-xs-12">
										<div class="clearfix">
											<div style="padding-bottom: 20px;">
												<a href="<?php echo site_url('autobus/add')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
											</div>
										</div>
										<table id="" class="table data-table table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														No
													</th>
													<th>Nama Autobus</th>
													<th>Alamat</th>
													<th>Telepon</th>
													<th>Email</th>
													<th>Tanggal Ditambah</th>
													<th></th>
												</tr>
											</thead>

											<tbody>
												<?php
												if(is_array($data_autobus) && count($data_autobus)>0){
													$no = 0 ;
													foreach ($data_autobus as $row) {
														$no++;
														?>
														<tr>
															<td><?php echo $no?></td>
															<td><?php echo $row->nama_otobus?></td>
															<td><?php echo $row->alamat?></td>
															<td><?php echo $row->telepon?></td>
															<td><?php echo $row->email?></td>
															<td><?php echo date_mysql_to_id($row->otobus_timestamp,'d F Y H:i')?></td>
															<td>
																<a href="<?php echo site_url('autobus/edit/'.$row->id_otobus)?>" class="btn btn-edit btn-primary btn-xs"><i class="fa fa-edit"></i></a>
																<a href="<?php echo site_url('admin/autobus/'.$row->id_otobus)?>" class="btn btn-edit btn-primary btn-xs"><i class="fa fa-user"></i></a>
																<a data-href="<?php echo site_url('autobus/delete/'.$row->id_otobus)?>" 
																	data-reload="<?php echo site_url('autobus')?>"
																	href="javascript:void(0)" class="btn btn-danger btn-edit btn-xs aksi-hapus"><i class="fa fa-trash"></i></a>
															</td>
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
