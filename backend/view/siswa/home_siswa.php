				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="">siswa</li>
							
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									<div class="page-header">
										<h1>
											siswa
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												List
											</small>
										</h1>
									</div><!-- /.page-header -->
									<div class="col-xs-12">
										<div class="clearfix">
											<div style="padding-bottom: 20px;">
												<a href="<?php echo site_url('siswa/add')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a> 
												
											</div>
										</div>
										<table id="" class="table data-table table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														No
													</th>
													<th>Nama Siswa</th>
													<th>No Induk</th>
													<th>Password</th>
													<th></th>
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
															<td>
																<div id="lihat-pwd-<?=$row->siswa_id?>" style="display:none"><?php 
																	echo $row->password;
																?></div>
																<a id="btn-lihatpwd-<?=$row->siswa_id?>" href="javascript:;" data-id="<?=$row->siswa_id?>" class="lihat-pwd btn btn-sm btn-info">Lihat Password</a>
															</td>
															<td>
																<a href="<?php echo site_url('siswa/edit/'.$row->siswa_id)?>" class="btn btn-edit btn-primary btn-xs"><i class="fa fa-edit"></i></a>
																<a data-href="<?php echo site_url('siswa/delete/'.$row->siswa_id)?>"
																	data-reload="<?php echo site_url('siswa')?>"
																	 href="javascript:void(0)" class="btn btn-danger btn-edit btn-xs aksi-hapus"><i class="fa fa-trash"></i></a>
																<a href="<?php echo site_url('siswa/reset_pwd/'.$row->siswa_id)?>" class="btn btn-edit btn-primary btn-xs" title="Reset Password"><i class="fa fa-refresh"></i></a>
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
					<script type="text/javascript">
						$('.lihat-pwd').click(function(){
							var id = $(this).attr('data-id');
							$('#lihat-pwd-'+id).show();
							$('#btn-lihatpwd-'+id).hide();
							setTimeout(function(){
								$('#lihat-pwd-'+id).hide();
								$('#btn-lihatpwd-'+id).show();
							},3000);
						});
					</script>