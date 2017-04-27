<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		<h3>Hasil Pencarian</h3>
		<hr>
		<div style="float:right;">
			<a href="<?php echo base_url('admin/'); ?>"><button type="button" class="btn btn-info">Kembali</button></a>
		</div>
		<?php
			if(count($cari)>0){
				$no=1; foreach ($cari as $data) { ?>
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
				<tr>
					<td scope="row"><?php echo $no++;?></td>
					<td><?php echo $data->title;?></td>
					<td><?php echo $data->content;?></td>
					<td><img src="<?php echo base_url('asset/upload/'.$data->image); ?>" style="width:150px; height:150px;"></td>
					<td><?php echo $data->kategori;?></td>
					<td>
						<a href="<?php echo base_url('admin/edit/'.$data->id_news); ?>"><button type="button" class="btn btn-info">Edit</button></a>
						<a href="<?php echo base_url('admin/hapus/'.$data->id_news); ?>"><button type="button" class="btn btn-danger">Hapus</Button></a>
					</td>
				</tr>
			</tbody>
		</table>
		<?php }
		} else { ?>
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
				<tr>
					<td scope="row" colspan="6" style="background-color:red; color:white;"><?php echo "Data tidak ditemukan";?></td>
				</tr>
			</tbody>
		</table>
		<?php
		}
		?>