<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit New</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        body{
            background-image: url('images/avatars/background.jpg');
        }
    </style>
</head>
<body style="background-image: url('images/avatars/background.jpg')">
    <form role="form" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        <div class="container">
        @csrf
            <center><h2>Update New</h2></center>
            <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" name="title" value="{!! $new['title']!!}" class="form-control" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Summarize</label>
                <input type="text" name="summarize" value="{!! $new['summarize']!!}" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Content</label>
                <input type="text" name="content" value="{!! $new['content']!!}" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">View Number</label>
                <input type="text" name="view_number" value="{!! $new['view_number']!!}" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Image</label>
                <input type="file" name="image" id="image" value="{!! $new['image']!!}" class="form-control" placeholder="">
            </div>
            <div>
				@include ('blocks.error')
			</div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </div>
    </form>
</body>