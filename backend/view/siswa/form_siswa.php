				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li >siswa</li>
							<li class="active"><?php echo ucfirst($mode)?></li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									<div class="page-header">
										<h1>
											siswa
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												<?php echo ucfirst($mode);?>
											</small>
										</h1>
									</div><!-- /.page-header -->
									<div class="col-xs-12">
										<div class="widget-box">
											<div class="widget-header widget-header-blue widget-header-flat">
												<h4 class="widget-title lighter">Form <?php echo ucfirst($mode)?> siswa</h4>
											</div>
											<div class="widget-body">
												<div class="widget-main">
													<form class="form-horizontal" role="form" method="post" action="<?php echo site_url('siswa/save')?>">
														<input type="hidden" name="mode" value="<?php echo $mode?>"/>
														<input type="hidden" name="siswa_id" value="<?php echo isset($siswa_id) ? $siswa_id : '' ?>"/>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="kota_asal"> Nama siswa </label>

															<div class="col-sm-9">
																<input id="kota_asal" value="<?php echo isset($data_edit) ? $data_edit['nama_siswa'] : '' ?>" name="nama_siswa" placeholder="Nama siswa" class="col-xs-10 col-sm-8" type="text" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="kota_tujuan"> No Induk </label>

															<div class="col-sm-9">
																<input id="kota_tujuan" value="<?php echo isset($data_edit) ? $data_edit['no_induk'] : '' ?>" name="no_induk" placeholder="No Induk" class="col-xs-10 col-sm-8" type="text" required>
															</div>
														</div>
														<?php
														if($mode=='tambah'){
															?>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="ats"> Password </label>
															<div class="col-sm-9">
																<input id="ats" name="password" placeholder="Password" class="col-xs-10 col-sm-8" type="text" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="ats"> Konfirmasi Password </label>
															<div class="col-sm-9">
																<input id="ats" name="ulangi_password" placeholder="Konfirmasi Password" class="col-xs-10 col-sm-8" type="text" required>
															</div>
														</div>
														<?php
														}?>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right"></label>

															<div class="col-sm-9">
																<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button> <a class="btn btn-danger" href="<?php echo site_url('siswa')?>"><i class="fa fa-undo"></i>Batal</a>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div><!-- /.span -->
								</div><!-- /.row -->
					</div><!-- /.page-content -->
