<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tour</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        body{
            background-image: url('images/avatars/background1.jpg');
        }
    </style>
</head>
<body>
    <form role="form" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        <div class="container">
        @csrf
            <center><h2>Add Tour</h2><center>
            <div class="col-sm-6">
                <div class="row">
                    <label for="formRowExampleInput">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title">
                </div>
                <div class="row">
                    <label for="formRowExampleInput">Summarize</label>
                    <input type="text" name="summarize" class="form-control" placeholder="Enter summarize">
                </div>
                <div class="row">
                    <label for="formRowExampleInput">Content</label>
                    <textarea rows="15" cols="50" name="content"  class="form-control" placeholder="Enter content">
                        Enter content
                    </textarea>
                </div>
                <div class="row">
                    <label for="formRowExampleInput">Type Tour</label>
                    <select name="typetour" id="" class="form-control">
                        @foreach($type_tour as $type_prds)
                        <option value="{{ $type_prds->id }}">
                            {{$type_prds->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <label for="formRowExampleInput">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Enter price">
                </div>
                <div class="row">
                    <label for="formRowExampleInput">Sale</label>
                    <input type="text" name="onsale" class="form-control" placeholder="Enter on sale">
                </div>
                <div class="row">
                    <label for="formRowExampleInput">Departure Date</label>
                    <input type="date" name="departure_date" class="form-control" placeholder="Enter departure date">
                </div>
                <div class="row">
                    <label for="formRowExampleInput">Departure Time</label>
                    <input type="time" name="departure_time" class="form-control" placeholder="Enter departure date">
                </div>
                <div class="row">
                    <label for="formRowExampleInput">Schedule</label>
                    <input type="text" name="schedule" class="form-control" placeholder="Enter schedule">
                </div>
                <div class="row">
                    <label for="formRowExampleInput">Number people</label>
                    <input type="text" name="number_people" class="form-control" placeholder="Enter number people">
                </div>
                <div class="row">
                    <label for="formRowExampleInput">Start gate</label>
                    <input type="text" name="start_gate" value="Đà Nẵng" class="form-control">
                </div>
                <div class="row">
                    <label for="formRowExampleInput">Image</label>
                    <input type="file" name="image" class="form-control" placeholder="">
                </div>
            </div>
            <div>
				@include ('blocks.error')
			</div>
            <button type="submit" name="add" class="btn btn-primary">Add</button>
        </div>
    </form>
</body>
