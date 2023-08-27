<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <div id="here"></div>



    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $.ajax({
            url: 'https://fakestoreapi.com/products/1',
            method: "GET",

            success: function(response) {
                var {
                    id,
                    title,
                    description
                } = response

                $("#here").text(description)

            }
        });
    </script>
</body>

</html>
