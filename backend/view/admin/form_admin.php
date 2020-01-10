				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li >Admin</li>
							<li class="active"><?php echo ucfirst($mode)?></li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									<div class="page-header">
										<h1>
											Admin
											<small>
												<i class="ace-icon fa fa-angle-double-right"></i>
												<?php echo ucfirst($mode);?>
											</small>
										</h1>
									</div><!-- /.page-header -->
									<div class="col-xs-12">
										<div class="widget-box">
											<div class="widget-header widget-header-blue widget-header-flat">
												<h4 class="widget-title lighter">Form <?php echo ucfirst($mode)?> Admin</h4>
											</div>
											<div class="widget-body">
												<div class="widget-main">
													<form class="form-horizontal" role="form" method="post" action="<?php echo site_url('admin/save')?>">
														<input type="hidden" name="mode" value="<?php echo $mode?>"/>
														<input type="hidden" name="id_admin" value="<?php echo isset($id_admin) ? $id_admin : '' ?>"/>
														<input type="hidden" name="id_otobus" value="<?php echo isset($id_otobus) ? $id_otobus : '' ?>"/>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="nama_admin"> Nama Admin </label>

															<div class="col-sm-9">
																<input id="nama_admin" value="<?php echo isset($data_edit) ? $data_edit['nama_admin'] : '' ?>" name="nama_admin" placeholder="Nama Admin" class="col-xs-10 col-sm-8" type="text" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="username"> Username </label>

															<div class="col-sm-9">
																<input id="username" value="<?php echo isset($data_edit) ? $data_edit['nama_login'] : '' ?>" name="username" placeholder="Username" class="col-xs-10 col-sm-8" type="text" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="telepon">Telepon</label>

															<div class="col-sm-9">
																<input id="telepon" value="<?php echo isset($data_edit) ? $data_edit['telepon'] : '' ?>" name="telepon" placeholder="Telepon" class="col-xs-10 col-sm-8" type="text" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="email">Email</label>

															<div class="col-sm-9">
																<input id="email" value="<?php echo isset($data_edit) ? $data_edit['email'] : '' ?>" name="email" placeholder="Email" class="col-xs-10 col-sm-8" type="email" required>
															</div>
														</div>
														<?php
														if(isset($mode) && $mode=='tambah'){
														?>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="password">Password</label>

															<div class="col-sm-9">
																<input id="password" name="password" placeholder="Password" class="col-xs-10 col-sm-8" type="password" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="u_password">Ulangi Password</label>

															<div class="col-sm-9">
																<input id="u_password" name="u_password" placeholder="Ulangi Password" class="col-xs-10 col-sm-8" type="password" required>
															</div>
														</div>
														<?php 
														}
														?>
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right"></label>

															<div class="col-sm-9">
																<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button> <a class="btn btn-danger" href="<?php echo site_url('admin/autobus/'.$id_otobus)?>"><i class="fa fa-undo"></i>Batal</a>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div><!-- /.span -->
								</div><!-- /.row -->
					</div><!-- /.page-content -->
