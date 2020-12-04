<?php
    include_once 'dbAction.php';
    
    $sql = "SELECT com_name,com_desc FROM community";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    
    <h2 align="center">Communities</h2>
    <table   id = "table">
    <tr>
            <td>1 Ferrari F138</td>
            <td>1 000€</td>
            <td>1 200€</td>

        </tr>
        <tr>
            <td>2 Ferrari F138</td>
            <td>1 000€</td>
            <td>1 200€</td>

        </tr>
        <tr>
            <td>3 Ferrari F138</td>
            <td>1 000€</td>
            <td>1 200€</td>

        </tr>
    </table>
    <div class="container" align=center>
        <input type="button" id="tst" value="OK" onclick="fnselect()" />
    </div>


    <script>

var table = document.getElementById('table'),
    selected = table.getElementsByClassName('selected');
table.onclick = highlight;
function highlight(e) {
    if (selected[0]) selected[0].className = '';
    e.target.parentNode.className = 'selected';
}
function fnselect(){
var $row=$(this).parent().find('td');
    var clickeedID=$row.eq(0).text();
    alert(clickeedID);
}

</script>
<style>
    .selected {
    background-color: powderblue;
    color: #000000;
}
</style>
</body>
</html>
