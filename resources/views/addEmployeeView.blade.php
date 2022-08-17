<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   

<div class="row mt-5">

   
<div class="col-md-3 offset-md-1 ">

    <div class="msg">

    </div>


<div class="form-group">
<label for="exampleInputEmail1">First Name</label>
<input type="text" class="fName form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your First Name"  >

</div>
<div class="form-group">
  <label for="exampleInputEmail1">Last Name</label>
  <input type="text" class="lName form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Last Name"  >
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <textarea id="" cols="30" rows="1" class="address form-control" placeholder="Enter Your Address">

    </textarea>
    
    </div>
<div class="form-group">
<label for="exampleInputPassword1">Phone</label>
<input type="number" class="phone form-control" id="exampleInputPassword1" placeholder="Enter Phone Number" >
</div>



<div class="form-group">
<label for="exampleInputPassword1">Email</label>
<input type="email" class="email form-control" id="exampleInputPassword1" placeholder="Enter Your email" >
</div>


<div class="form-group">
<label for="exampleInputPassword1">Status</label>
<select class="status form-control"  id="">
  <option value="#">---Select--</option>
<option value="1">Active</option>
<option value="2">Inactive</option>

</select>
</div> 

<button  type="submit" class="addemployee btn btn-primary mt-3">Submit</button>


</div>


<div class="col-md-7 ">

<table class="table">
  <thead>
    <tr>
 
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
      
  </tbody>
</table>

</div>



</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script>

    jQuery(document).ready(function(){
      showemployee()
        function showemployee(){
          $.ajax({
            type: "GET",
            url: "showemployee",
            dataType: "JSON",
            success: function (response) {

            
              
            }
          });

        } // function showemployee closing bracket


    jQuery(".addemployee").click(function(){

$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


        var fName=jQuery(".fName").val();
        var lName=jQuery(".lName").val();
        var address=jQuery(".address").val();
        var phone=jQuery(".phone").val();
        var email=jQuery(".email").val();
        var status=jQuery(".status").val();

      $.ajax({
          type: "POST",
          url: "addemployee",
          dataType: "JSON",
          data:{

        fName:fName,
        lName:lName,
        address:address,
        phone:phone,
        email:email,
        status:status
    },
     success:function (response) {
        if(response.msg=="success"){

            jQuery(".msg").html('<div class="alert alert-success">Data  Submitted</div>');
            jQuery(".alert").fadeOut(1000);

            jQuery(".fName").val("");
            jQuery(".lName").val("");
            jQuery(".address").val("");
            jQuery(".phone").val("");
            jQuery(".email").val("");
            jQuery(".status").val("");
        }
        else{

            jQuery(".msg").html('<div class="alert alert-danger">Data Not Submitted</div>');
            jQuery(".alert").fadeOut(1000);
        }

    }
      });

      });


















   

   
       
      }); 

        
     
  

   


  </script>


   
</body>
</html>