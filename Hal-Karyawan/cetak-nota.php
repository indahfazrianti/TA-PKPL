<?php
$nota = $_GET['nota'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>CETAK NOTA LAUNDRY</title>
    </head>
    <body>
        <center>
            <h1>NOTA LAUNDRY POINT</h1>
            <h3>Jl. SetiaBudi No.38 Kota Tegal</br>
                No. HP/WA : 0819-0129-6127</br>
                Buka Hari Senin - Sabtu</br>
                Mulai Jam 08.00 -  17.00
            </h3>
            <hr color="black" size="3%">
            <hr color="black" size="3%">
        </center>
<?php 
              include 'koneksi.php';
              $transaksi = mysqli_query($koneksi,"select tp.nm_pelanggan, tp.tgl_transaksi, tp.tgl_selesai, p.no_hp 
                                        from transaksi_pemesanan tp, pelanggan p where tp.nm_pelanggan = p.nama_pelanggan 
                                        and tp.kd_pemesanan like '%".$nota."%'");
              while($t = mysqli_fetch_array($transaksi))
              { 
				$nmp = $t['nm_pelanggan'];
				$tglt = $t['tgl_transaksi'];
				$tgls = $t['tgl_selesai'];
				$hp = $t['no_hp'];
			  }
?>
            <table border="0" align="right">
                <tr>
                    <td> Tanggal Masuk : <b><?php echo $tglt; ?> </b></td></tr>
                <tr>
                    <td> Tanggal Selesai : <b><?php echo $tgls; ?> </b></td></tr>
            </table>
            <table border="0" align="Left">
                <tr>   
                    <td> Nama  : <b><?php echo $nmp; ?> </b></td></tr>
                <tr>
                    <td> No. HP: <b><?php echo $hp; ?> </b></td></tr>
            </table>
            </br>
            </br>
            </br>
            <table border="2" align="center" width="1000" height="120">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Paket</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
<?php 
              include 'koneksi.php';
			  $no = 1;
              $total = 0;
			  $harga = 0;
              $transaksi_laundry = mysqli_query($koneksi,"select * from transaksi_detail_pemesanan where kd_pemesanan like '%".$nota."%'");
              while($tl = mysqli_fetch_array($transaksi_laundry))
              {

?>
                    <tr>
                        <th><?php echo $no++; ?></th>
                        <td><?php echo $tl['ket_paket'];?></td>
                        <td><?php echo $tl['berat'];?> Kg</td>
                        <td><?php echo "Rp. " . number_format($tl['nm_paket'],0,".",".");?></td>
						<td><?php echo "Rp. " . number_format($tl['bayar'],0,".",".");?></td>
                    </tr>
<?php
					$total = $total+ $tl['bayar'];
              }
?>
                </tbody>
                <tfoot>
                    <tr class="totals-row" height="50">
			            <td colspan="4" class="wide-cell">
                        <center><strong>Sub Total</strong></center></td>
						<td coslpan="2"><?php echo "Rp. " . number_format($total,0,".",".");?></td>
		            </tr>
				</tfoot>
            </table>
        <br>
        <h2>PERHATIAN :</h2>
        <ol align="left">
            <h3><li><i> Pengambilan barang harus Sudah Lunas dan disertai Nota Pengambilan </i></li></h3>
            <h3><li><i> Kerusakan warna pada pakaian bukan Tanggung Jawab Laundry </i></li></h3>	
            <h3><li><i> Barang diambil maksimal 3 Minggu </i></li></h3>
        </ol>
            
    
    </body>
</html>