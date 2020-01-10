				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li >Jadwal</li>
							<li class="active"><?php echo ucfirst($mode)?></li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									<div class="page-header">
										<h1>
											Jadwal
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												<?php echo ucfirst($mode);?>
											</small>
										</h1>
									</div><!-- /.page-header -->
									<div class="col-xs-12">
										<div class="widget-box">
											<div class="widget-header widget-header-blue widget-header-flat">
												<h4 class="widget-title lighter">Form <?php echo ucfirst($mode)?> Jadwal</h4>
											</div>
											<div class="widget-body">
												<div class="widget-main">
													<form class="form-horizontal" role="form" method="post" action="<?php echo site_url('jadwal/save')?>">
														<input type="hidden" name="mode" value="<?php echo $mode?>"/>
														<input type="hidden" name="id_bus" value="<?php echo isset($jadwal_id) ? $jadwal_id : '' ?>"/>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="kode_bus"> Tanggal Mulai </label>

															<div class="col-sm-9">
																<input id="kode_bus" value="<?php echo isset($data_edit) ? $data_edit['tanggal_mulai'] : '' ?>" name="tgl_mulai" placeholder="Tanggal Awal" class="col-xs-10 col-sm-8 date-timepicker" type="text" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="nama_bus"> Tanggal Akhir </label>

															<div class="col-sm-9">
																<input id="nama_bus" value="<?php echo isset($data_edit) ? $data_edit['tanggal_akhir'] : '' ?>" name="tgl_akhir" placeholder="Tanggal Akhir" class="col-xs-10 col-sm-8 date-timepicker" type="text" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="nama_bus"> Deskripsi </label>

															<div class="col-sm-9">
																<textarea class="editor" name="deskripsi"><?php echo isset($data_edit) ? $data_edit['informasi'] : '' ?></textarea>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right"></label>

															<div class="col-sm-9">
																<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button> <a class="btn btn-danger" href="<?php echo site_url('jadwal')?>"><i class="fa fa-undo"></i>Batal</a>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div><!-- /.span -->
								</div><!-- /.row -->
					</div><!-- /.page-content -->
