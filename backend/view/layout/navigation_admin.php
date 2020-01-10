<ul class="nav nav-list">
					<li class="<?php echo isset($menu_aktif) && $menu_aktif=='dashboard' ? 'active' : ''?>">
						<a href="<?php echo base_url()?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					
					<li class="hover <?php echo isset($menu_aktif) && $menu_aktif=='soal' ? 'active' : ''?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-question"></i>
							<span class="menu-text">
								Soal Ujian
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							
							<li class="">
								<a href="<?php echo site_url('soal');?>">
									
									Daftar Soal
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo site_url('soal/add');?>">
									
									Tambah Baru
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="hover <?php echo isset($menu_aktif) && $menu_aktif=='siswa' ? 'active' : ''?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text">
								Siswa
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							
							<li class="">
								<a href="<?php echo site_url('siswa');?>">
									
									Daftar Siswa
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo site_url('siswa/add');?>">
									
									Tambah Baru
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="<?php echo isset($menu_aktif) && $menu_aktif=='ujian' ? 'active' : ''?>">
						<a href="<?php echo site_url('ujian')?>" >
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text">
								Daftar Ujian
							</span>
							
						</a>
						
					</li>
					
					
				</ul><!-- /.nav-list -->