<!DOCTYPE html>
<html>
<head>
    <style>
        /* Style for the container */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Centers the container vertically */
        }

        /* Style for the forms */
        .form-container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        /* Style for the iframes */
        iframe {
            width: 100%;
            height: 500px; /* Initial height */
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["submit_address"])) {
            $address = $_POST["address"];
            $address = str_replace(" ", "+", $address);
            ?>

            <iframe id="map-iframe" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>

            <script>
                // JavaScript to adjust the iframe height after loading
                window.onload = function() {
                    var iframe = document.getElementById("map-iframe");
                    iframe.onload = function() {
                        var newHeight = iframe.contentWindow.document.body.scrollHeight + "px";
                        iframe.style.height = newHeight;
                    };
                };
            </script>

            <?php
        }
        ?>

        <div class="form-container">
            <form method="POST">
                <p>
                    <input type="text" name="address" placeholder="Enter address">
                </p>
                <input type="submit" name="submit_address" value="Show Address on Map">
            </form>
        </div>

        <?php
        if (isset($_POST["submit_coordinates"])) {
            $latitude = $_POST["latitude"];
            $longitude = $_POST["longitude"];
            ?>

            <iframe id="map-iframe" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>

            <script>
                // JavaScript to adjust the iframe height after loading
                window.onload = function() {
                    var iframe = document.getElementById("map-iframe");
                    iframe.onload = function() {
                        var newHeight = iframe.contentWindow.document.body.scrollHeight + "px";
                        iframe.style.height = newHeight;
                    };
                };
            </script>

            <?php
        }
        ?>

        <div class="form-container">
            <form method="POST">
                <p>
                    <input type="text" name="latitude" placeholder="Enter latitude">
                </p>
                <p>
                    <input type="text" name="longitude" placeholder="Enter longitude">
                </p>
                <input type="submit" name="submit_coordinates" value="Show Coordinates on Map">
            </form>
        </div>
    </div>
</body>
</html>
