<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Axois Form Handle</title>
  </head>
  <body>
    <div class="container">
        <form id="form-data" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="email" name="email">
            </div>
            <div class="form-check">
            </div>
            <button type="button" id="submit-button" class="btn btn-primary">Submit</button>
        </form>
    </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>
       <script>
    document.getElementById('submit-button').addEventListener('click',
    function handleForm(event) {
        event.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        const form = document.getElementById('form-data')
        const formdata = Object.fromEntries(new FormData(form))
        console.log(formdata)
        axios.post('http://127.0.0.1:8000/api/ajax/post', formdata)
            .then(data => {
                console.log(data.data)
            })

    })

      </script>


  </body>
</html>