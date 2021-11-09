<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title style="text-align: center"
    >save</title>
    <link rel="stylesheet" href="1.css">
    <style>
input{
    margin: 20px;
    font-size: 40px;
    color: red;
}
        body
        {
            background-color: #e2e8f0;
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
    </style>

</head>
<body class="afef">
<form  action="/ad" method="post" role="form">
    {{csrf_field()}}
<div>
@if(count($users) != 0)
        <div style="color: gold;padding: 10px">
        <table align="center">
@foreach($users as $user)
        <div style="color: gold;padding: 10px">
        <tr><td>
                <h1 style="color: red">{{$user->name}}</h1>
            </td><td>
                <input style="font-size: 20px" type="radio" name="{{$user->name}}" value="0">no</input>
        <input style=" color: goldenrod" type="radio" name="{{$user->name}}" value="1">yes</input>
<br></td>
            </tr>

    @endforeach
    </table>
        </div >
            <br>
<FOOTER style="text-align:center;font-size: xxx-large;margin-top: 300px; ">
<button style="font-size: xx-large;float: right" type="submit ">Confirm</button>
    @endif
</FOOTER>
</div>
</form>
</body>
