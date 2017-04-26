<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		<h2>Edit News</h2><hr>
		<?php foreach($news as $n) {?>
			<form action="<?php echo base_url('admin/update')?>" method="post">
				<div class="form-group">
					<label class="col-lg-2 col-sm-2 control-label">Judul Artikel</label>
					<div class="col-lg-10">
						<input type="hidden" id="id_news" name="id_news">
						<input type="text" class="form-control" name="title" value="<?php echo $n->title?>"></input>
					</div>
				</div>
				<br><br><br>
				<div class="form-group">
					<label class="col-lg-2 col-sm-2 control-label">Isi News</label>
					<div class="col-lg-10">
						<textarea cols="10" rows="20" type="text" class="form-control" name="content"><?php echo $n->content?></textarea>
					</div>
				</div>
				<hr>
				<center><button class="btn btn-info" type="submit"> Simpan</button></center>
			</form>
			<?php } ?>		
		</div>
		<hr>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#wrapper -->			