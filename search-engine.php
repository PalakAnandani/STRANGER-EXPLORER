<style type="text/css">
.col-sm-3 {margin-top:10px;}
</style> 
 <div style="background:#002E5A;margin-top:-20px;padding:40px;">
    <h3 id="blse" style="color:white;">Search Your Matching Interest</h3>
    <form method="post">
      <div class="row">
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

    <div class="col-sm-3">
      <input class="form-control" type="date" name="bdate" required="">
    </div>

    <div class="col-sm-3">
     <select name="btime" class="form-control" required="">
                <option value="">Select Time</option>
                <option>9 AM</option>
                <option>10 AM</option>
                <option>11 AM</option>
                <option>12 PM</option>
                <option>1 PM</option>
              </select>
    </div>

    <div class="col-sm-3">
      <center>
           <button style="background:goldenrod;color:white;width:100%;" class="btn btn-default" type="submit" name="search">SEARCH</button>
      </center>
    </div>
  </div>
    </form>
   </div>