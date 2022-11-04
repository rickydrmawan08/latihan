
<?php
include '../auth/koneksi.php';

$query =mysqli_query ($mysqli,"SELECT * FROM tb_mahasiswa ");

?>
<center>
<h2>DATA MAHASISWA</h2>
<a href="tambah-data.php" class="btn btn-success" style="float:left">tambah data</a>
<table class="table table-bordered table-responsive" width="100%">
    
    <thead class="bg-info">
        <tr>
            <th>no</th> <th>nama</th> <th>nim</th> <th>semester</th> <th>username</th><th>action</th>

        </tr>
        </thead>
        <tbody>
            <?php
            $no=0;
            while ($result = mysqli_fetch_array($query)){
                $no++;

        ?>
        <tr>
            <td> <?php echo $no; ?></td>
            </td>
            <td> <?php echo $result['nama'];?>
            </td>
            <td> <?php echo $result['nim'];?>
            </td>
            <td> <?php echo $result['semester'];?>
            </td>
            <td> <?php echo $result['username'];?>
            </td>
            <td>
                 <a href="delete-data.php?id=<?php echo $result['id'];?>" class="btn btn-danger" >hapus</a>
                 <a href="home.php?id=<?php echo $result['id'];?>&&page=edit" class="btn btn-warning" >edit</a>
                 
            </td>
            </tr>
                
             <?php } ?>

        </tbody>

</table>
</center>