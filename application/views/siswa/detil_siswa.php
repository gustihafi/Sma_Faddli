
<style type="text/css">
	body {
		font-family: Arial;
		font-size: 11px;
		color: #000;
		margin: 0px auto;
		padding :0px;
	}

	.kotakHasil {
		margin: 0px left;
		padding :0px;
		background-color: #fff;
		border : 1px solid #666;
		width : 936px;
	}
	
	.daftarPencarian {
		margin: 0px;
		padding: 0px;
	}
	
	.daftarPencarian ul {
		margin:0px;
		padding: 0px;
	}
	
	.daftarPencarian li {
		margin:0px;
		padding: 5px;
		cursor: pointer;
		list-style : none;
	}
	
	.daftarPencarian li:hover {
		background-color: #6b6b6b;
	}
	#namaDosen{
		padding : 8px;
		background-color: #f3f3f3;
		border : 1px solid #666;
		width:920px;
	}
	#total{
		background-color:#f3f3f3; 
		padding:10px; 
		text-align:center;
	}
	#loading{
		background-color:#f3f3f3; 
		padding:5px; 
		text-align:center;
	}
	a{
		text-decoration:none;
		color:#000;
	}
	a:hover{
		text-decoration:underline;
		color:#000;
	}
</style>
</head>
<body>
	<div>
<table border="2" cellpadding="1" cellspacing="1" width="100%" style=" border-collapse: collapse;" class="record" bordercolor="#CCCCCC">
			<tr style="background-color:#333; color:#FFFFFF;" align="center">
				<td>No</td>
				<td>No Pendaftaran</td>
				<td>Nama Siswa</td>
				<td>Tempat & Tanggal Lahir</td>
				<td>Jenis Kelamin</td>
				<td>No Hp/Telp Siswa</td>
				<td>Alamat Siswa</td>
				<td>Nama Orang Tua</td>
				<td>Alamat Orang Tua</td>
				<td>No Hp Orangtua</td>
				<td colspan="3"><div class="btn-add"title= 'Action'>Action</div></a></td>
			</tr>
			<?php
			$no = 1;
				if($dat_siswa->num_rows()>0)
				{
				foreach($dat_siswa->result_array() as $db)
					{
				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $db['idnp']; ?></td>
					<td><?php echo $db['nama']; ?></td>
					<td><?php echo $db['ttgl']; ?></td>
					<td><?php echo $db['jkelamin']; ?></td>
					<td><?php echo $db['tlps']; ?></td>
					<td><?php echo $db['alamat']; ?></td>
					<td><?php echo $db['not']; ?></td>
					<td><?php echo $db['almtor']; ?></td>
					<td><?php echo $db['hpor']; ?></td>
					<td width="9"><a href="<?php echo base_url(); ?>tatausaha/lihat/<?php echo $db['idnp']; ?>"<div class="btn-edit" title= 'Lihat Data'>Lihat</div></a></td>
					<td width="9"><a href="<?php echo base_url(); ?>tatausaha/cetak/<?php echo $db['idnp']; ?>" <div class="btn-print" title= 'Cetak Data'>Cetak</div></a></td>
					<td width="9"><a href="<?php echo base_url(); ?>tatausaha/hapus/<?php echo $db['idnp']; ?>" onclick="return confirm('Anda yakin ingin menghapus <?php echo $db['nama']; ?> ?');"><div class=
					"btn-delete" title= 'Hapus Data'>Hapus</div></a></td>
				</tr>
				
				
				<?php
					$no++;
					}
				}
				else
				{
					?>
					
				<tr style="text-align:center;">
					<td colspan="6">Belum ada data</td>
				</tr>
					<?php
				}
			?>
			<br>
			
		<table align="center">
			<tr align="center">
				<br>
				<td>
					<?php
						echo $paginator;
					?>
				</td>
			</tr>
		</table>
		
			
		</table>
		