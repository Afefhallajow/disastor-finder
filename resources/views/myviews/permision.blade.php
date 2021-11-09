<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title style="text-align: center"
    >access denied</title>
    <style>
        header {
            background-color:black;
            height:50px;
            position:fixed;
            width:100%;
            left:0;
            z-index:3;
            top:0;
            overflow:hidden;

        }

        .af{
            height:100px;

            line-height:30px;
            color:red;
            background-color:#e3e3e3;
            margin-top:0px;
            display:none;
        }
        .p
        {
            background-color:yellow;
            display:block;
            float:left;
            margin-top:0px;
            text-align:center;
            line-height:0px;
            height:50px;

            width:140px;
            font-size:20px;
            color:blue;

        }

        li
        {
            display:inline;
            padding:10px

        }

        table{
            background-color: black;
            vertical-align: center;
            text-align: center;
            font-size: 20px;
        }
        tr{
            text-align: center;
        }
        td{
            text-align: center;
        }
        label{
            color: red;
            font-size: 25px;
        }
        input{

            color: red;
        }
        body
        {
            background-color: #e2e8f0;
        }
    </style>

</head>
<body class="afef">
<form >
    {{csrf_field()}}
    <header >

        <div class="p">
            <p>searh for ill</p>
        </div>
        <a >

            <ul  style="height:40px;float:right;line-height:40px;background-color:#40c218;margin: 0px;color:#080809;">


                <li>sss</li>

                <li>sss</li>

                <li>sss</li>

            </ul>
        </a>
        <button  style="height:40px;float: right " id="1" class="btn" onclick="ShowAndHide()"type="button">=</button>
    </header>




    <aside style="position:absolute;left:0;width:140px;height:100%;background-color:black;top:50px;margin-top:0;z-index:2;"class="">
        <ul  class="af"  id="af" style="">
            <li>sss</li><br>

            <li>sss</li><br>

            <li>sss</li>

        </ul>


        <h1></h1>

    </aside>
    <SCRIPT>
        function ShowAndHide() {
            var x = document.getElementById('af');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

    </SCRIPT>
    <div style="font-size: 60px ;text-align: left;margin-left: 140px;margin-top: 50px" class="form_group">
        <h1 style="color: red">Acsses Denid</h1>
    </div>

    <div style="text-align: center;margin-top: 50px" class="form_group">
<h1>you dont have permison</h1>
    </div>
</form>
</body>


</html>

