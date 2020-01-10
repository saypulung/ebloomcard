				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="">ujian</li>
							
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									<div class="page-header">
										<h1>
											Nilai
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												List
											</small>
										</h1>
									</div><!-- /.page-header -->
									<div class="col-xs-12">
										<div class="clearfix">
											
										</div>
										<table id="" class="table data-table table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														No
													</th>
													<th>Nama Siswa</th>
													<th>No Induk</th>
													<th>Nilai</th>
													<th>Waktu Submit</th>													
													<td></td>
												</tr>
											</thead>

											<tbody>
												<?php
												if(is_array($data_siswa) && count($data_siswa)>0){
													$no = 0 ;
													foreach ($data_siswa as $row) {
														$no++;
														?>
														<tr>
															<td><?php echo $no?></td>
															<td><?php echo $row->nama_siswa?></td>
															<td><?php echo $row->no_induk?></td>
															<td><?php echo $row->nilai?></td>
															<td><?php echo date_mysql_to_id($row->tanggal_ujian,'j F Y H:i')?></td>
															<td><a class="btn btn-primary btn-xs" href="<?php echo base_url('ujian/detail/'.$row->session_id)?>">Detail</a></td>
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
