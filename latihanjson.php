<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Nilai</title>
</head>
<body>
<header style="background-color: orange;">
        <h3>Daftar Nilai</h3>
</header>
<?php
    $json_string = file_get_contents('data.json'); //memanggil data json
    $json = json_decode($json_string,true); //mengubah data json menjadi array
?> 
<table border="1" class="table table-striped mt-5" style="width: 900px;" align="center">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>  
        <?php 
        $no = 1; 
        foreach ($json as $data) { 
            $tanggal_lahir = new DateTime($data['tanggal_lahir']);
            $today = new DateTime();
            $umur = $tanggal_lahir->diff($today);
            $umur_str = $umur->format('%y tahun ');
            
        ?>  
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data["nama"] ?></td>
                <td><?php echo $data["kelas"] ?></td>
                <td><?php echo $data["alamat"] ?></td>
                <td><?php echo $data["tanggal_lahir"] ?></td>
                <td><?php echo $umur_str ?></td>
                <td><?php echo $data["nilai"] ?></td>
                <td>
                    <?php
                        if ($data["nilai"] >= 90 && $data["nilai"] <=100) {
                                echo "A";
                                }elseif ($data["nilai"] >= 80 && $data["nilai"] <= 90)
                                {
                                echo "B";
                                }elseif ($data["nilai"] >= 70 && $data["nilai"] <= 80)
                                {
                                echo "C";
                                }elseif ($data["nilai"] >= 0 && $data["nilai"] <= 70)
                                {
                                echo "D";
                                }   
                    ?>
                </td>
            </tr>
        <?php  
        $no++;
        }?>      
   </table>
</body>
</html>