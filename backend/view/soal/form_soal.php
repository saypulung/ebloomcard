<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Home</a>
		</li>
		<li >Soal</li>
		<li class="active"><?php echo ucfirst($mode)?></li>
	</ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
		<div class="row">
				<div class="page-header">
					<h1>
						Soal
						<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							<?php echo ucfirst($mode);?>
						</small>
					</h1>
				</div><!-- /.page-header -->
				<div class="col-xs-12">
					<div class="widget-box">
						<div class="widget-header widget-header-blue widget-header-flat">
							<h4 class="widget-title lighter">Form <?php echo ucfirst($mode)?> Soal</h4>
						</div>
						<div class="widget-body">
							<div class="widget-main">
								<form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="<?php echo site_url('soal/save')?>">
									<input type="hidden" name="mode" value="<?php echo $mode?>"/>
									
									<input type="hidden" name="soal_id" value="<?php echo isset($soal_id) ? $soal_id : '' ?>"/>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Keterangan"> Soal </label>

										<div class="col-sm-9">
											<textarea id="Keterangan" name="isi_soal" placeholder="Keterangan" class="editor col-xs-10 col-sm-8" required><?php echo isset($data_edit) ? $data_edit['isi_soal'] : '' ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="level"> Level Soal </label>

										<div class="col-sm-9">
											<select id="level" class="col-sm-2" name="levelsoal">
												<option <?php if(isset($data_edit) && $data_edit['levelsoal']=='1'){ echo "selected";}?> value="1">1</option>
												<option <?php if(isset($data_edit) && $data_edit['levelsoal']=='2'){ echo "selected";}?> value="2">2</option>
												<option <?php if(isset($data_edit) && $data_edit['levelsoal']=='3'){ echo "selected";}?> value="3">3</option>
												<option <?php if(isset($data_edit) && $data_edit['levelsoal']=='4'){ echo "selected";}?> value="4">4</option>
												<option <?php if(isset($data_edit) && $data_edit['levelsoal']=='5'){ echo "selected";}?> value="5">5</option>
												<option <?php if(isset($data_edit) && $data_edit['levelsoal']=='6'){ echo "selected";}?> value="6">6</option>
												<option <?php if(isset($data_edit) && $data_edit['levelsoal']=='7'){ echo "selected";}?> value="7">7</option>
												<option <?php if(isset($data_edit) && $data_edit['levelsoal']=='8'){ echo "selected";}?> value="8">8</option>
												<option <?php if(isset($data_edit) && $data_edit['levelsoal']=='9'){ echo "selected";}?> value="9">9</option>
												<option <?php if(isset($data_edit) && $data_edit['levelsoal']=='10'){ echo "selected";}?> value="10">10</option>
											</select>
											
										</div>
									</div>
									<?php
									if($mode=='edit'){
										//echo $data_edit['soal_id'];
										$this->db->order_by('jawaban_kode','asc');
										$detail = $this->db->get_where('jawaban_soal',array('soal_id'=>$data_edit['soal_id']))->result_array();
										//print_r($detail);
									}
									?>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="jawaban1"> Jawaban 1 </label>

										<div class="col-sm-9">
											<label><input <?php echo isset($detail) && $detail[0]['benar'] ? 'checked' : '' ?> type="radio" name="benar" value="1">  Benar</label>
											<input value="<?php echo isset($detail) ? $detail[0]['jawaban'] : ''?>" id="jawaban1" value="" name="jawaban[1]" class="col-xs-10 col-sm-8" type="text" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="jawaban2"> Jawaban 2 </label>

										<div class="col-sm-9">
											<label><input <?php echo isset($detail) && $detail[1]['benar'] ? 'checked' : '' ?> type="radio" name="benar" value="2">  Benar</label>
											<input value="<?php echo isset($detail) ? $detail[1]['jawaban'] : ''?>" id="jawaban2" value="" name="jawaban[2]" class="col-xs-10 col-sm-8" type="text" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="jawaban3"> Jawaban 3 </label>

										<div class="col-sm-9">
											<label><input <?php echo isset($detail) && $detail[2]['benar'] ? 'checked' : '' ?> type="radio" name="benar" value="3">  Benar</label>
											<input value="<?php echo isset($detail) ? $detail[2]['jawaban'] : ''?>" id="jawaban3" value="" name="jawaban[3]" class="col-xs-10 col-sm-8" type="text" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="jawaban4"> Jawaban 4 </label>

										<div class="col-sm-9">
											<label><input <?php echo isset($detail) && $detail[3]['benar'] ? 'checked' : '' ?> type="radio" name="benar" value="4">  Benar</label>
											<input value="<?php echo isset($detail) ? $detail[3]['jawaban'] : ''?>"  id="jawaban4" value="" name="jawaban[4]" class="col-xs-10 col-sm-8" type="text" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="jawaban5"> Jawaban 5 </label>

										<div class="col-sm-9">
											<label><input <?php echo isset($detail) && $detail[4]['benar'] ? 'checked' : '' ?> type="radio" name="benar" value="5">  Benar</label>
											<input value="<?php echo isset($detail) ? $detail[4]['jawaban'] : ''?>"  id="jawaban5" value="" name="jawaban[5]"  class="col-xs-10 col-sm-8" type="text" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"></label>

										<div class="col-sm-9">
											<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button> <a class="btn btn-danger" href="<?php echo site_url('soal')?>"><i class="fa fa-undo"></i>Batal</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div><!-- /.span -->
			</div><!-- /.row -->
</div><!-- /.page-content -->
