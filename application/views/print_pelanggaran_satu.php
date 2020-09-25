
<table border="1" align="center">
			    <thead class="thead-custom">
                    <tr>
                        <td colspan="2" align="center">
                        <h1 align"center">LAPORAN HASIL PELANGGARAN</h1>
<h3 align"center">Tanggal <?= $data->tanggal ?></h3>
                        </td>
                    </tr>
                <tr>
                <td>Tanggal</td>
                <td><?= $data->tanggal ?></td>
                </tr>

                <tr>
                <td>Waktu</td>
                <td><?= $data->waktu ?></td>
                </tr>

                <tr>
                <td>Foto</td>
                <td><?php echo '<img width="300" height="300" src="data:image/jpeg/jpg/png;base64,'.base64_encode( $data->foto).'" />'?></td>	              
	              </td>
                </tr>
			    </thead>
            </table>
            
            <script>
                window.print()
            </script>