<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<style>
    body{
        display:flex;
    justify-content:center;
    align-items:"center";
        margin:50px;
    }


.container{
    width: 80%;
    box-shadow: 5px 5px 20px black;
    min-height:400px;
    /* border:1px solid red; */
    padding:20px;
}
</style>
</head>
<body>



<div class="container">

<table id="myTbl">
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>BODY</th>
        </tr>
    </thead>
    <tbody>
       
    </tbody>
</table>


</div>



<script>

$(document).ready(function(){
  var rows = ``;
  $.ajax({
      url:'https://jsonplaceholder.typicode.com/posts',
      type:'GET',
      success:function(response){
        //   console.log(response[0]);
          response.map((item)=>{
                // console.log(item.id);
                rows +=`<tr>
                            <td>${item.id}</td>
                            <td>${item.title}</td>
                            <td>${item.body}</td>
                        </tr>`;
          })
          $("#myTbl tbody").append(rows);
            $("#myTbl").DataTable();
      }
  });
  
 
});

</script>


</body>
</html>