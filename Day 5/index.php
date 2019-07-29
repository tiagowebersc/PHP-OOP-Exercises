<?php
// With AJAX mechanism, you can make sure that a form is submitted and sent to the server without reloading the page
?>

<body>
    <div id="myDiv">...</div>
    <form action="" method="post">
        <label for="firstName">First name:</label>
        <input type="text" name="firstName" id="firstName">
        <br>
        <label for="lastName">Last name:</label>
        <input type="text" name="lastName" id="lastName">
        <br>
        <input type="submit" name="submit" value="Click me!">
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        // AJAX Call to ajax_test.php
        $(function() {
            $('input[type="submit"]').click(function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'ajax_test.php',
                    type: 'post',
                    data: $('form').serialize(),
                    dataType: 'html',
                    success: function(result) {
                        console.log(result);
                        $('#myDiv').html(result);
                    },
                    error: function(err) {
                        // If an AJAX error happens
                        console.error("erro");
                    }
                });
            });
        });
    </script>
</body>