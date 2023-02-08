<html>
<script type="text/javascript">
    function myFunction() {
        var ip = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
        alert(ip);
      document.getElementById("ip").innerHTML = ip;
    }
  </script>
<body onload="myFunction()">
    <script>
        var ip = "ip"
    </script>
    <h1>"The value for number is: " <span id="ip"></span></h1>
</body>