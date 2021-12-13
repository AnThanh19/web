<?php
require "../../../db/dbhelper.php";

if (isset($_POST['marap'])) {
    $maphim = 12;
    $marap = $_POST['marap'];
    $sql          = "SELECT * FROM `suatchieu` WHERE marap='.$marap.' and MAPHIM='.$maphim.' and MAGHE='0'";
    $result = executeResult($sql);
?>
<br>
    <div class="form-item">
        <label for="premiere">Thời gian:</label>
            <select name="premiere" id="premiere" class="form-control">
                <option hidden disabled selected>---Chọn thời gian---</option>
                    <?php
                        foreach ($result as $item) {
                            echo '
                                        <option value="'.$item[0].'">'.$item[6].'</option>';
                        }
                    ?>
            </select>
    </div>
<?php                      
}
?>
