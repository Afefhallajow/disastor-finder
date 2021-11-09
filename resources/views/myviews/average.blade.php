<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title style="text-align: center"
    >save</title>
    <link rel="stylesheet" href="1.css">
    <style>

        body
        {
            background-color: #e2e8f0;
        }
    </style>

</head>
<body class="afef">
<form  action="/average" method="post" role="form">
    {{csrf_field()}}

    <div style="text-align: center;margin-top: 150px" class="form_group">

        <legend  style="text-align: center;font-size:60px;color: red">save</legend>
        <label for="">name</label><br>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter..."><br>



        <button style="text-align: center;font-size: 20px" type="submit" class="btn btn-primary">Confirm</button>
    </div>
</form>

</body>


</html>

