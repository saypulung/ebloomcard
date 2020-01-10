				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="">Jadwal</li>
							
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									<div class="page-header">
										<h1>
											Jadwal
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												List
											</small>
										</h1>
									</div><!-- /.page-header -->
									<div class="col-xs-12">
										<div class="clearfix">
											<div style="padding-bottom: 20px;">
												<a href="<?php echo site_url('jadwal/add')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a> 
												
											</div>
										</div>
										<table id="" class="table data-table table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														No
													</th>
													<th>Tanggal Mulai</th>
													<th>Tanggal Berakhir</th>
													<th>Jumlah Barang</th>
													<th>Tanggal Dibuat</th>
													<th></th>
												</tr>
											</thead>

											<tbody>
												<?php
												if(is_array($data_jadwal) && count($data_jadwal	)>0){
													$no = 0 ;
													foreach ($data_jadwal as $row) {
														$no++;
														?>
														<tr>
															<td><?php echo $no?></td>
															<td><?php echo $row->tanggal_mulai?></td>
															<td><?php echo $row->tanggal_akhir?></td>
															<td></td>
															<td><?php echo date_mysql_to_id($row->tanggal_dibuat,'d F Y H:i')?></td>
															<td>
																<a title="Barang Lelang" href="<?php echo site_url('barang/list/'.$row->jadwal_id)?>" class="btn btn-edit btn-primary btn-xs"><i class="fa fa-list"></i></a>

																<a href="<?php echo site_url('jadwal/edit/'.$row->jadwal_id)?>" class="btn btn-edit btn-primary btn-xs"><i class="fa fa-edit"></i></a>
																<a data-href="<?php echo site_url('jadwal/delete/'.$row->jadwal_id)?>"
																	data-reload="<?php echo site_url('jadwal')?>"
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
