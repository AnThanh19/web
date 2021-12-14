<?php
require "../../../db/dbhelper.php";

if (isset($_POST['diachi'])) {
    $maphim = $_POST['maphim'];
    $diachi = $_POST['diachi'];
    $sql          = "select marap, tenrap from rapchieu where diachi='$diachi'";
    $result = executeResult($sql);
?>
    <div class="form-item">
        <label for="marap">Danh Sách Rạp:</label>
            <select onchange="Phim()" name="marap" id="marap" class="form-control">
                    <option class="" hidden disabled selected>---Chọn Rạp---</option>
                    <?php
                        foreach ($result as $item) {
                            echo '
                                    <option value="'.$item[0].'">'.$item[1].'</option>';
                        }
                    ?>
            </select>
    </div>
<?php                      
}
?>
<!-- <html>
<script>
    function Phim() {
            var xmlHttp = new XMLHttpRequest();
            var obj = document.getElementById("tar");
            var url = "TimTime.php";
            var param = "marap=" + marap.value;
            xmlHttp.open("POST", url, true);
            xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlHttp.send(param);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    if (xmlHttp.responseText == "ok") {
                        location.replace("./");
                    } else {
                        obj.innerHTML = xmlHttp.responseText;
                    }
                }
            }
        }
</script>
</html> -->

       