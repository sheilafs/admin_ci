<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
				<div style="float:right;"> <!-- Supaya toombol berada di kanan dan float(timbul) -->
				<!-- Tombol untuk menampilkan modal News-->
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#Modalnews">News</button>
				<!-- /Tombol untuk menampilkan modal News-->
				<!-- Tombol untuk menampilkan modal Kategori-->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalkategori">Kategori</button>
				<!-- /Tombol untuk menampilkan modal Kategori-->
				</div>
				<!-- Modal -->
				<div id="Modalkategori" class="modal fade" role="dialog" tabindex"-1">
					<div class="modal-dialog">
					<!-- Isi dari modal -->
						<div class="modal-content">
						<!-- Header modal -->
							<div class="modal-header">
								<h2>Tambah Kategori</h2>
							</div>
						<!-- /Header modal -->
						<!-- Body modal -->
						<div class="modal-body">
							<div class="row">
							<form class="form-horizontal form-label-left" action="<?php echo base_url(). 'admin/tambah_kategori'; ?>" method="post">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4 col-xs-12">Kategori</label>
									<div class="col-md-6 col-sm-6 col-xs-12"><input class="form-control" type="hidden" name="id_ktg"></div>
									<div class="col-md-6 col-sm-6 col-xs-12"><input class="form-control" type="text" name="kategori" placeholder="Tulis Kategori Yang Ditambahkan"></div>
								</div>
							</div>
						</div>
						<!-- /Body modal -->
						<!-- Footer modal -->
						<div class="modal-footer">
							<div class="form-group">
								<div class="col-md-5 col-sm-5 col-xs-12 col-md-offset-3">
									<button type="submit" value="Tambah" class="btn btn-info">Simpan</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal"> <!--Memberikan efek memudar saat ditekan saat menutup modal-->Batal</button>
								</div>
							</div>
							</form>	
						</div>
						<!-- /Footer modal -->
						</div>
					<!-- /Isi dari modal -->
					</div>
				</div>
				<!-- /Modal -->
				<!-- Modal News-->
				<div id="Modalnews" class="modal fade" role="dialog" tabindex"-1">
					<div class="modal-dialog">
					<!-- Isi dari modal News-->
						<div class="modal-content">
						<!-- Header modal News-->
							<div class="modal-header">
								<h2>Tambah News</h2>
							</div>
						<!-- /Header modal News-->
						<!-- Body modal News-->
						<div class="modal-body" style="width:900px;">
							<div class="row">
							<form class="form-horizontal form-label-left" action="<?php echo base_url(). 'admin/tambah_news'; ?>" method="post">
								<div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Judul</label>
									<div class="col-md-6 col-sm-6 col-xs-12"><input class="form-control" type="hidden" name="id_news"></div>
									<div class="col-md-6 col-sm-6 col-xs-12"><input class="form-control" type="text" name="title" style="width:400px;" placeholder="Tulis Judul"></div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Konten</label>
									<div class="col-md-6 col-sm-6 col-xs-12"><textarea style="width:400px;height:200px;" type="text" placeholder="Tulis Konten" class="form-control" name="content"></textarea></div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Gambar</label>
									<div class="col-md-6 col-sm-6 col-xs-12"><textarea class="form-control" type="text" name="gambar" style="width:400px;" placeholder="Tulis Judul Gambar dan Ekstensinya"></textarea></div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Kategori</label>
									<div class="col-md-5 col-sm-5 col-xs-12"><select class="form-control" type="number" name="id_ktg" style="width:400px;">
									<?php foreach($kat as $t){?><option value="<?php echo $t->id_ktg;?>"><?php echo $t->kategori ?></option><?php } ?></select></div>
								</div>
							</div>
						</div>
						<!-- /Body modal News-->
						<!-- Footer modal News-->
						<div class="modal-footer">
							<div class="form-group">
								<div class="col-md-5 col-sm-5 col-xs-12 col-md-offset-3">
									<button type="submit" value="Tambah" class="btn btn-info">Simpan</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal"> <!--Memberikan efek memudar saat ditekan saat menutup modal-->Batal</button>
								</div>
							</div>
							</form>	
						</div>
						<!-- /Footer modal News-->
						</div>
					<!-- /Isi dari modal News-->
					</div>
				</div>
				<!-- /Modal News-->
			<h2>Postingan News</h2>
			<div class="x_title"></div>
				<div class="x_content">
					<div class="form-group">
				<form action="<?php echo base_url('admin/hasil')?>" action="GET">
						<div class="col-md-9 col-sm-9 col-xs-12">
							<label>Search</label>
							<input type="text" class="form-control" id="cari" name="cari" placeholder="cari" style="width:200px;">
							<br>
							<input class="btn btn-primary" type="submit" value="Cari">
						</div>
				</form>
					</div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No. </th>
							<th>Judul</th>
							<th>Konten</th>
							<th>Gambar</th>
							<th>Kategori</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php $no=1; foreach($kategori as $k) { ?>
						<tr>
							<td scope="row"><?php echo $no++;?></td>
							<td><?php echo $k->title;?></td>
							<td><?php echo $k->content;?></td>
							<td><img src="<?php echo base_url('asset/upload/'.$k->image); ?>" style="width:150px; height:150px;"></td>
							<td><?php echo $k->kategori;?></td>
							<td>
								<a href="<?php echo base_url('admin/edit/'.$k->id_news); ?>"><button type="button" class="btn btn-info">Edit</button></a>
								<a href="<?php echo base_url('admin/hapus/'.$k->id_news); ?>"><button type="button" class="btn btn-danger">Hapus</Button></a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
				</div>
			</div>
			</div>
			<div class="clearfix"></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#wrapper -->