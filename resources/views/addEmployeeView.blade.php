<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   

<div class="row mt-5">

   
<div class="col-md-3 offset-md-1 ">

    <div class="mb-3">

      <input type="text" class="search form-control" placeholder="Search" >

    </div>
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
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody id="show" >
      
  </tbody>
</table>

</div>



</div>



<!-- Modal For Update -->
<div class="modal fade" id="updateeemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div class="form-group">
          <label for="exampleInputEmail1">First Name</label>
          <input type="text" class="ufName form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your First Name"  >
          
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="ulName form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Last Name"  >
            
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Address</label>
              <textarea id="" cols="30" rows="1" class="uaddress form-control" placeholder="Enter Your Address">
          
              </textarea>
              
              </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Phone</label>
          <input type="number" class="uphone form-control" id="exampleInputPassword1" placeholder="Enter Phone Number" >
          </div>
          
          
          
          <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="uemail form-control" id="exampleInputPassword1" placeholder="Enter Your email" >
          </div>
          
          
          <div class="form-group">
          <label for="exampleInputPassword1">Status</label>
          <select class="ustatus form-control"  id="">
            <option value="#">---Select--</option>
          <option value="1">Active</option>
          <option value="2">Inactive</option>
          
          </select>
          </div> 
     
          
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="updateemployee btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal for delete Item -->
<div class="modal fade" id="deleteemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     Are You Sure Want to Delete This User?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="myModal" type="button" class="deletebtn btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script>

    jQuery(document).ready(function(){

      showemployee();

        function showemployee(){
          $.ajax({
            type: "GET",
            url: "showemployee",
            dataType: "JSON",
            success: function (response) {
             var table="";
              $.each(response.alldata, function (Array, Element) { 
                 table+='<tr>\
                  <td>'+Element.fName +'  '+ Element.lName+'  </td>\
                  <td>'+Element.email+'</td>\
                  <td>'+Element.address+'</td>\
                  <td>'+Element.phone+'</td>\
                  <td>'+Element.status+'</td>\
                  <td><button id="updatebtn" value="'+Element.id+'" class="updatebtn btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#updateeemployee"><i class="fa-solid fa-square-pen"></i></button></td>\
                  <td><button value="'+Element.id+'" class="deleteid btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteemployee"><i class="fa-solid fa-trash"></i></button></td>\
                  </tr>';
              });

              jQuery("#show").html(table);

            
              
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
        showemployee();
      

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
      showemployee();
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

       //For delete employee with ajax

       jQuery(document).on("click",".deleteid",function () {
        var deleteid=jQuery(this).val();
          jQuery(".deletebtn").val(deleteid);

         });

      $(document).on("click",".deletebtn",function() {
        
        var id=jQuery(this).val();
        $.ajax({
          type: "GET",
          url: "deleteemployee/"+id,  
          dataType: "JSON",
          success: function (response) {
            jQuery("#deleteemployee").modal("hide");
            showemployee();
            jQuery(".msg").html('<div class="alert alert-danger">Delete Successfully</div>');
            jQuery(".alert").fadeOut(1000);
            
            
          }
        });
    });



    

     //For Update show employee with ajax with modal

     jQuery(document).on("click",".updatebtn",function(){

$.ajaxSetup({
  headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });

  var id= jQuery(this).val();
  jQuery(".updateemployee").val(id);

          $.ajax({
        type: "GET",
        url: "updatemodalshow/"+id,
        dataType: "JSON",
        success: function (response) {
        jQuery(".ufName").val(response.data.fName);
        jQuery(".ulName").val(response.data.lName);
        jQuery(".uemail").val(response.data.email);
        jQuery(".uphone").val(response.data.phone);
        jQuery(".uaddress").val(response.data.address);
        jQuery(".ustatus").val(response.data.status);

 
  
        }
        });
        });

//For Update by ajax

jQuery(document).on("click",".updateemployee",function(){

       id= jQuery(this).val();

        var fName=jQuery(".ufName").val();
        var lName=jQuery(".ulName").val();
        var address=jQuery(".uaddress").val();
        var phone=jQuery(".uphone").val();
        var email=jQuery(".uemail").val();
        var status=jQuery(".ustatus").val();
        $.ajax({
          type: "POST",
          url: "updatedata/"+id,
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
        jQuery("#updateeemployee").modal('hide');
            showemployee();
            jQuery(".msg").html('<div class="alert alert-danger">Data Updated</div>');
            jQuery(".alert").fadeOut(1000);
            
            

  
    }
    });
      

        
    });


           jQuery(document).on("keyup",".search", function(){
       
             var search= jQuery(this).val();

             $.ajax({
              type: "GET",
              url: "search/"+search,
              dataType: "JSON",
              success: function (response) {
                if(response.data !="empty"){

                jQuery(".fName").val(response.data.fName);
                jQuery(".lName").val(response.data.lName);
                jQuery(".email").val(response.data.email);
                jQuery(".phone").val(response.data.phone);
                jQuery(".address").val(response.data.address);
                jQuery(".status").val(response.data.status);
                }
                else{
                jQuery(".fName").val("");
                jQuery(".lName").val("");
                jQuery(".email").val("");
                jQuery(".phone").val("");
                jQuery(".address").val("");
                jQuery(".status").val("");

                }
                
                
              }
             });
           

           });

     
      }); 

  

  </script>


   
</body>
</html>