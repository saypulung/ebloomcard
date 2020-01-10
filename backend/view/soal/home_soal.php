				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="">Soal</li>
							
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									<div class="page-header">
										<h1>
											Soal
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												List
											</small>
										</h1>
									</div><!-- /.page-header -->
									<div class="col-xs-12">
										<div class="clearfix">
											<div style="padding-bottom: 20px;">
												<a href="<?php echo site_url('soal/add')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a> 
												
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
													<th>Level</th>
													<th>Tanggal Ditambah</th>
													<th></th>
												</tr>
											</thead>

											<tbody>
												<?php
												if(is_array($data_soal) && count($data_soal)>0){
													$no = 0 ;
													foreach ($data_soal as $row) {
														$no++;
														?>
														<tr>
															<td><?php echo $no?></td>
															<td><?php echo $row->isi_soal?></td>
															<td>
															<?php
																
																$detail = $this->db->get_where('jawaban_soal',array('soal_id'=>$row->soal_id))->result_array();
																echo '<ul>';
																//print_r($detail);
																foreach ($detail as $d) {
																	if($d['benar']=='1'){
																		echo '<li><b>'.$d['jawaban'].'</b></li>';
																	}else{
																		echo '<li>'.$d['jawaban'].'</li>';
																	}
																}
																echo '</ul>';
																$detail=NULL;
																?>
															</td>
															<td><?php echo $row->levelsoal?></td>
															<td><?php echo date_mysql_to_id($row->tanggal_ditambah,'d F Y H:i')?></td>
															<td>
															
																<a href="<?php echo site_url('soal/edit/'.$row->soal_id)?>" class="btn btn-edit btn-primary btn-xs"><i class="fa fa-edit"></i></a>
																<a data-href="<?php echo site_url('soal/delete/'.$row->soal_id)?>"
																	data-reload="<?php echo site_url('soal')?>"
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
