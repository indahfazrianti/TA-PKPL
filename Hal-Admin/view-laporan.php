<?php
	
$tgl1 = $_POST['tgl1'];
$tgl2 = $_POST['tgl2'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>LAPORAN TRANSAKSI LAUNDRY</title>
    </head>
    <body>
        <center>
            <h1>LAPORAN LAUNDRY POINT</h1>
            <h3>Jl. SetiaBudi No.38 Kota Tegal</br>
                No. HP/WA : 0819-0129-6127</br>
                Buka Hari Senin - Sabtu</br>
                Mulai Jam 08.00 -  17.00
            </h3>
			<h3>Transaksi Tanggal </br> <?php echo $tgl1; ?> - <?php echo $tgl2; ?></h3>
            <hr color="black" size="3%">
            <hr color="black" size="3%">
        </center>

            </br>
            </br>
            </br>
            <table border="2" align="center" style="width: 80%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Transaksi</th>
                        <th>Nota</th>
                        <th>Pelanggan</th>
                        <th>Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
<?php 
              include 'koneksi.php';
			  $tgl_awal = date('Y-m-d', strtotime($tgl1));
			  $tgl_akhir = date('Y-m-d', strtotime($tgl2));
			  $no = 1;
              $total = 0;
			  $harga = 0;
              $transaksi_laundry = mysqli_query($koneksi,"SELECT * FROM transaksi_pemesanan where tgl_transaksi between '".$tgl_awal."' and '".$tgl_akhir."' order by kd_pemesanan asc");
              while($tl = mysqli_fetch_array($transaksi_laundry))
              {

?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tl['tgl_transaksi'];?></td>
                        <td><?php echo $tl['kd_pemesanan'];?></td>
                        <td><?php echo $tl['nm_pelanggan'];?></td>
                        <td><?php echo "Rp. " . number_format($tl['total'],0,".",".");?></td>
                    </tr>
<?php
					$total = $total+ $tl['total'];
              }
?>
                </tbody>
                <tfoot>
                    <tr class="totals-row" height="50">
			            <td colspan="4" class="wide-cell">
                        <center><strong>Sub Total</strong></center></td>
						<td><?php echo "Rp. " . number_format($total,0,".",".");?></td>
		            </tr>
				</tfoot>
            </table>
    </body>
</html>