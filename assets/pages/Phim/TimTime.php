<?php
require_once "../../../db/dbhelper.php";
if (isset($_POST['marap'])) {
    $maphim = $_POST['maphim'];
    $marap = $_POST['marap'];
    $sql = "SELECT MASC,DATE_FORMAT(NGAYCHIEU,'%d-%m-%Y %H:%i:%S') as NGAYCHIEU FROM `suatchieu` 
            WHERE marap='$marap' and MAPHIM='$maphim' and MAGHE='0' and ngaychieu>=now() ";
    $result = executeResult($sql);
 
?>
  
<html>
    <form method="POST">
    <div class="form-item">
        <label for="masc">Thời gian:</label>
            <select name="masc" id="masc" class="form-control">
                    <option hidden disabled selected>---Chọn thời gian---</option>
                    <?php
                        foreach ($result as $item) { ?>
                            <option value="<?=$item[0]?>"><?=$item[1]?></option>
                    <?php    }
                    
                    ?>
            </select>
    </div>
    <button class="btn btn-success" style="width: 25%; border-radius: 5px; font-weight: 600; text-align: center; padding-top: 4px; float: right;">Tiếp tục</button>
    <!-- <input type="button" class="btn btn-primary premiere-sub-btn" style="border-radius: 5px;" value="Đặt vé"> -->
    </form>
   
<?php                      
}
?>
</html>
