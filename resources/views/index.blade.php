<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="p-5">
        <h1>IP: {{ $serverIp }}</h1>
        <form method="post" action="">
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="title" name="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
        <div class="mt-5">
            <h1>List</h1>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-3">
                        <div>
                            <img style="object-fit: cover; width: 100%; height: 300px"
                                src="https://d2dxxrqpe5sd97.cloudfront.net/cat_{{ rand(1, 3) }}.jpeg" />
                        </div>
                        <div>
                            {{ $post->title }}
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
