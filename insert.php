<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "prak5");
if(!empty($_POST))
{
 $output = '';
    $name = mysqli_real_escape_string($connect, $_POST["nama"]);  
    $alamat = mysqli_real_escape_string($connect, $_POST["jenis"]);  
    $gender = mysqli_real_escape_string($connect, $_POST["kode"]);  
    $umur = mysqli_real_escape_string($connect, $_POST["jumlah"]);
    $query = "
    INSERT INTO barang(nama, jenis, kode, jumalh)  
     VALUES('$name', '$jenis', '$kode', '$jumlah')
    ";
    if(mysqli_query($connect, $query))
    {
     $output .= '<label class="text-success">Data Berhasil Masuk</label>';
     $select_query = "SELECT * FROM barang ORDER BY id DESC";
     $result = mysqli_query($connect, $select_query);
     $output .= '
      <table class="table table-bordered">  
                    <tr>  
                         <th width="55%">Nama Barang</th>  
                         <th width="15%">Lihat</th>  
                         <th width="15%">Edit</th>  
                         <th width="15%">Hapus</th>  
                    </tr>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>  
                         <td>' . $row["nama"] . '</td>  
                         <td><input type="button" name="view" value="Lihat Detail" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                         <td><input type="button" name="edit" value="Edit" id="' . $row["id"] . '" class="btn btn-warning btn-xs edit_data" /></td>       
                         <td><input type="button" name="delete" value="Hapus" id="' . $row["id"] . '" class="btn btn-danger btn-xs hapus_data" /></td>
                  
                    </tr>
      ';
     }
     $output .= '</table>';
    }else{
        $output .= mysqli_error($connect);
    }
    echo $output;
}
?>