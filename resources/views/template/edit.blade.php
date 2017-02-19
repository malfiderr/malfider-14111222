<br/>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="">
					<input type="text" name="nama" value="">
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="">
			</tr>	
			<tr>
				<td>No Telepon</td>
				<td><input type="text" name="no_telp" value=""></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>