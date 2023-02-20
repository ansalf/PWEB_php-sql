<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 $connect = mysqli_connect("localhost", "root", "", "prak5");
 $query = "SELECT * FROM barang WHERE id = '".$_POST["employee_id"]."'";
 $result = mysqli_query($connect, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="30%"><label>Name Barang</label></td>  
            <td width="70%">'.$row["nama"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Jenis Barang</label></td>  
            <td width="70%">'.$row["jenis"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Kode Barang</label></td>  
            <td width="70%">'.$row["kode"].'</td>  
        </tr>
       
        <tr>  
            <td width="30%"><label>Jumlah Barang</label></td>  
            <td width="70%">'.$row["jumlah"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>
