				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="">siswa</li>
							<li class="">jawaban</li>
							
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									
									<div class="col-xs-12">
										<div class="clearfix">
											<div style="padding-bottom: 20px;">
												<div class="row">
													<div class="col-xs-12"><h3>Detail Jawaban Soal</h3></div>
												</div>
												<div class="row">
													<div class="col-xs-3">
														Nama Siswa
													</div>
													<div class="col-xs-9">
														: <?php echo $data_siswa->nama_siswa?>
													</div>
												</div>	
												<div class="row">
													<div class="col-xs-3">
														No Induk
													</div>
													<div class="col-xs-9">
														: <?php echo $data_siswa->no_induk?>
													</div>
												</div>	
												<hr>											
											</div>
										</div>
										<table id="" class="table data-table table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														No
													</th>
													<th>Soal</th>
													<th>Jawaban</th>
													<th>Benar?</th>
													
												</tr>
											</thead>

											<tbody>
												<?php
												if(is_array($data) && count($data)>0){
													$no = 0 ;
													foreach ($data as $row) {
														$no++;
														?>
														<tr>
															<td><?php echo $no?></td>
															<td><?php echo $row->isi_soal?></td>
															<td><?php echo $row->jawaban?></td>
															<td><?php echo $row->benar==1?'Ya' : 'Tidak'?></td>
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
