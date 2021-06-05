<!DOCTYPE html>
<head>
    <meta charset="utf-8">

    <title>Wikicode receiving mail tutorial</title>

    <meta name="description" content="Wikicode receiving mails from contact form using mailable in Laravel 8">
    <meta name="author" content="Wikicodes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<html>
<body>
<div class="container mt-4">
    <div>Contact Form</div>
    <form method="post" action="{{ route('contact.send') }}">
        <div class="form-group">
            <label for="exampleInputFirstname">Firstname</label>
            <input type="text" class="form-control" id="exampleInputFirstname" name="firstname" aria-describedby="Firstname" placeholder="First name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputLastname">Lastname</label>
            <input type="text" class="form-control" id="exampleInputLastname" name="lastname" aria-describedby="Lastname" placeholder="Last name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPhone">Phone number</label>
            <input type="text" class="form-control" id="exampleInputPhone" name="phone" placeholder="Phone number" required>
        </div>
        <div class="form-group">
            <label for="exampleInputMessage">Message</label>
            <textarea class="form-control" id="exampleInputMessage" name="message" placeholder="Please enter enter your message" required></textarea>
        </div>
        <input name="_token" value="{{ csrf_token() }}" type="hidden">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
