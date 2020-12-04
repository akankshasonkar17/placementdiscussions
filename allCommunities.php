<?php
    include_once 'dbAction.php';
    
    $sql = "SELECT com_name,com_desc FROM community";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
    <script src="https://kit.fontawesome.com/486ebc0d41.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    require "navbar.php";
    ?>
    <h2 align="center">Communities</h2>
    <table  align="center" style="line-height:25px;" id = "table">
    <tr>
        <th>Name of Community</th>
        <th>Description</th>
    </tr>
    <?php
    //Fetch Data form database
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $row['com_name']; ?></td>
        <td><?php echo $row['com_desc']; ?></td>
    </tr>
    <?php
    }
}
    else
    {
        ?>
    <tr>
    <th colspan="2">There's Community!!!</th>
    </tr>
    <?php
    }
    ?>
</table>
<?php
    //Fetch Data form database
    if($result->num_rows > 0){
    ?>
    <div class="container" align="center">
        <input type="button" id="VIEW"  value="VIEW" class="VIEW"  />
    </div>    
        <?php
    }
    ?>

<script>
    function highlight(e) {
        if (selected[0]) selected[0].className = '';
        e.target.parentNode.className = 'selected';
    }

    var table = document.getElementById('table'),
    selected = table.getElementsByClassName('selected');
    table.onclick = highlight
    
    $("#table tr").click(function(){
        $(this).addClass('selected').siblings().removeClass('selected');    
        var value=$(this).find('td:first').html();
        alert(value);    
    });

    $('.VIEW').on('click', function(e){
        alert($("#table tr.selected td:first").html());
    });

    
    
    
</script>
<style>
    .selected {
    background-color: powderblue;
    color: #000000;
}
</style>
</body>
</html>
