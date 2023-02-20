<script>
$('#update_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#enama').val() == "")  
  {  
   alert("Mohon Isi Nama ");  
  }  
  else if($('#ekode').val() == '')  
  {  
   alert("Mohon Isi Kode Barang");  
  }  
  
  else 
  {  
   $.ajax({  
    url:"update.php",  
    method:"POST",  
    data:$('#update_form').serialize(),  
    beforeSend:function(){  
     $('#update').val("Updating");  
    },  
    success:function(data){  
     $('#update_form')[0].reset();  
     $('#editModal').modal('hide');  
     $('#employee_table').html(data);  
    }  
   });  
  }  
 });
</script>
<?php 
if(isset($_POST["employee_id"]))
{
 $output = '';
 $connect = mysqli_connect("localhost", "root", "", "prak5");
 $query = "SELECT * FROM barang WHERE id = '".$_POST["employee_id"]."'";
 $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
     $output .= '
         <form method="post" id="update_form">
     <label>Nama Barang</label>
     <input type="hidden" name="id" id="id" value="'.$_POST["employee_id"].'" class="form-control" />
     <input type="text" name="nama" id="enama" value="'.$row['nama'].'" class="form-control" />
     <br />
     <label>Jenis Barang</label>
     <textarea name="jenis" id="jenis" class="form-control">'.$row['jenis'].'</textarea>
     <br />
     <label>Kode Barang</label>
     <textarea name="kode" id="ekode" class="form-control">'.$row['kode'].'</textarea>
     <br />  
     <label>Jumlah Barang</label>
     <input type="text" name="jumalh" id="jumlah" value="'.$row['jumlah'].'" class="form-control" />
     <br />
     <input type="submit" name="update" id="update" value="Update" class="btn btn-success" />
 
    </form>
     ';
    echo $output;
}
?>