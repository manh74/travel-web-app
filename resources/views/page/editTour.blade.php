<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <center><h2>Update Tour</h2></center>
            <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" name="title" value="{!! $tour['title']!!}" class="form-control" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Summarize</label>
                <input type="text" name="summarize" value="{!! $tour['summarize']!!}" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Content</label>
                <input type="text" name="content" value="{!! $tour['content']!!}" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Type Tour</label>
                <select name="typetour" id="" class="form-control">
                    @foreach($type_tour as $type_prds)
                    <option value="{{ $type_prds->id }}"
                        @if ($type_prds->id==$tour['id_type'])
                            selected
                        @endif>
                        {{$type_prds->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Price</label>
                <input type="text" name="price" value="{!! $tour['price']!!}" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">On Sale</label>
                <input type="text" name="onsale" value="{!! $tour['on_sale']!!}" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Schedule</label>
                <input type="text" name="schedule" value="{!! $tour['schedule']!!}" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Image</label>
                <input type="file" name="image" id="image" value="{!! $tour['image']!!}" class="form-control" placeholder="">
            </div>
            <div>
				@include ('blocks.error')
			</div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </div>
    </form>
</body>