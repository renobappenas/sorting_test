<html>

<head>
    <title>Test Ajax</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
</head>

<body>
    <ul id="here">

    </ul>
</body>

</div>

<script>
    function do_main() {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("here").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "http://localhost/TestFirdaSafridi/sorting.php", true);
        xhttp.send();

    }
    do_main();
</script>

</html>
