<style type="text/css">
.col-sm-3, .col-sm-1 {margin-top:10px;}
</style> 
 <div style="background:#002E5A;margin-top:-20px;padding:20px;">
    
    <form method="post">
      <div class="row">
        <div class="col-sm-3">
          <h3 id="blse" style="color:white;">Find Your Destination:-</h3>
        </div>
        <div class="col-sm-3">
       <select type="text" name="area" class="form-control" required>
          <option value="">Select Area</option>
          <?php
          $adata = mysqli_query($con,"SELECT * FROM `tbl_area` ");
          while($adata1 = mysqli_fetch_assoc($adata))
          {
         ?>
         <option><?php echo $adata1['area'] ?></option>
         <?php
          }
          ?>
         </select>
    </div>

    <div class="col-sm-1">
      <center>
           <button style="background:goldenrod;color:white;width:100%;" class="btn btn-default" type="submit" name="search">SEARCH</button>
      </center>
    </div>
  </div>
    </form>
   </div>