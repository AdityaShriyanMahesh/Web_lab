<html>
<head>
    <script>
        function showdate()
        {
            var d = new Date();
            var h = d.getHours();
            var m = d.getMinutes();
            var s =d.getSeconds();
            document.getElementById("client-date").innerHTML = (h + ':' + m + ':' + s);
            setTimeout(showdate,1000);
        }
    </script>
</head>

<body onload="showdate()">
<h1 style="text-align: center;font-size:100px;">Time</h1>
<p id="client-date" style="font-size:50px;"></p>
    <?php

        date_default_timezone_set("Asia/Kolkata");
        echo '<p id="server-date" style="font-size:50px;">' .date("h:i:s").'</p>';

    ?>
</body>
</htmnl>