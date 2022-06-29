<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accordion Test</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
</head>
<body>
    <div id = "accordion">
    <?php
        for($i = 0; $i < 20; $i++){
            echo "<h3>"."Sessão: ".$i."</h3>";
            echo "<div>
            <p>
            Cras dictum. Pellentesque habitant morbi tristique senectus et netus
            et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
            mauris vel est.
            </p>
            <p>
            Lorem Ipsum is simply dummy text of 
            the printing and typesetting industry. Lorem Ipsum 
            as been the industry's standard dummy text ever since the 
            1500s, when an unknown printer took a galley of type and scrambled 
            it to make a type specimen book. It has survived not only five centuries, 
            but also the leap into electronic typesetting, remaining essentially unchanged. 
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
            passages, and more recently with desktop publishing software like Aldus PageMaker including 
            versions of Lorem Ipsum.
            </p>
            </div>";
        }
    ?>
    </div>
</body>
<script type = "text/javascript">
    $(function(){
        $("#accordion").accordion();
    })
</script>   
</html>