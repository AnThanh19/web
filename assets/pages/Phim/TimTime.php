<?php
require_once "../../../db/dbhelper.php";
if (isset($_POST['marap'])) {
    $maphim = $_POST['maphim'];
    $marap = $_POST['marap'];
    $sql = "SELECT MASC,DATE_FORMAT(NGAYCHIEU,'%d-%m-%Y %H:%i:%S') as NGAYCHIEU FROM `suatchieu` 
            WHERE marap='$marap' and MAPHIM='$maphim' and MAGHE='0'";
    $result = executeResult($sql);
 
?>
<html>
    <div class="form-item">
        <label for="time">Thời gian:</label>
            <select name="time" id="time" class="form-control">
                    <option hidden disabled selected>---Chọn thời gian---</option>
                    <?php
                        foreach ($result as $item) { ?>
                            <option value="<?=$item[0]?>"><?=$item[1]?></option>
                    <?php    }
                    ?>
            </select>
    </div>
<?php                      
}
?>
</html>