				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="">Autobus</li>
							<li class="active">Admin</li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									<div class="page-header">
										<h1>
											Admin
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												List
											</small>
										</h1>
									</div><!-- /.page-header -->
									<div class="col-xs-12">
										<div class="clearfix">
											<div style="padding-bottom: 20px;">
												<a href="<?php echo site_url('admin/add/'.$id_otobus)?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a> 
												<a href="<?php echo site_url('autobus')?>" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Kembali</a>
											</div>
										</div>
										<table id="" class="table data-table table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														No
													</th>
													<th>Nama Admin</th>
													<th>Username</th>
													<th>Email</th>
													<th>Telepon</th>
													<th>Tanggal Ditambah</th>
													<th></th>
												</tr>
											</thead>

											<tbody>
												<?php
												if(is_array($data_admin) && count($data_admin)>0){
													$no = 0 ;
													foreach ($data_admin as $row) {
														$no++;
														?>
														<tr>
															<td><?php echo $no?></td>
															<td><?php echo $row->nama_admin?></td>
															<td><?php echo $row->nama_login?></td>
															<td><?php echo $row->email?></td>
															<td><?php echo $row->telepon?></td>
															<td><?php echo date_mysql_to_id($row->admin_timestamp,'d F Y H:i')?></td>
															<td>
																<a href="<?php echo site_url('admin/edit/'.$row->id_admin)?>" class="btn btn-edit btn-primary btn-xs"><i class="fa fa-edit"></i></a>
																<a data-href="<?php echo site_url('admin/delete/'.$row->id_admin)?>"
																	data-reload="<?php echo site_url('admin/autobus/'.$id_otobus)?>"
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
