
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>NBA Website (ORIGINAL)</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
</head>

<body>

<div class="container">

    <form class="form-signin" method="POST" action="/register">
        {{ csrf_field() }}
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" required autofocus>

        <label for="email">Email address</label>
        <input type="email" id="email" name="email" class="form-control" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" required>

        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

    @if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach

    @endif
</div> <!-- /container -->

</body>
</html>
