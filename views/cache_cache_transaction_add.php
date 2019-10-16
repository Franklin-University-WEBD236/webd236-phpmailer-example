<!DOCTYPE html>
<html>
  <head>
    <title><?php echo(htmlentities($title)); ?></title>
    <link rel="shortcut icon" href="https://cdn.glitch.com/7635e9c3-2015-4ec8-967a-16ca37cc9e55%2Ffavicon.ico" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/static/style.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="/static/custom.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="/">
          <img src="https://cdn.glitch.com/bed3c681-d03b-40ea-90af-156a3b284a2a%2Fmoney.svg?v=1568308051033" width="30" height="30" class="d-inline-block align-top" alt=""> My Money Engine</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://glitch.com/edit/#!/remix/<?php echo(htmlentities(getenv('PROJECT_DOMAIN'))); ?>">Remix</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" onclick="post('/reset');" style="cursor:pointer">Reset DB</a>
          </li>
        </ul>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="display-4"><?php echo(htmlentities($title)); ?></h1>
          <p class="lead">A simple money transactions engine.</p>
          <p><em>Author: <a href="mailto:tyler.whitney@franklin.edu">Tyler Whitney</a></em></p>
          <hr>
        </div>
      </div>
      
<?php  if (isset($errors)): ?>
<div class="row">
  <div class="col-lg-12">
    <div class="alert alert-danger">
      Please fix the following errors:
      <ul class="mb-0">
<?php  foreach ($errors as $error): ?>
        <li><?php echo(htmlentities($error)); ?></li>
<?php  endforeach; ?>
      </ul>
    </div>
  </div>
</div>
<?php  endif;?>
  

      

<div class="row">
  <div class="col-lg-12">
<?php echo(htmlentities($operation)); ?>
    <form action="/transaction/<?php echo(htmlentities( (htmlentities($operation)) )); ?>" method="post">
      <div class="form-group">
        <label for="amount">Amount</label>
        <input type="number" min="1" id="amount" name="amount" class="form-control" placeholder="How much do you want to send?" value="<?php echo(htmlentities($transaction['amount'])); ?>" />
      </div>
      <div class="form-group">
        <label for="title">Subject</label>
        <input type="text" min="1" id="subject" name="subject" class="form-control" placeholder="Why are you sending money?" value="<?php echo(htmlentities($transaction['subject'])); ?>" />
      </div>
      <div class="form-group">
        <label for="content">Message</label>
        <textarea class="form-control" id="message" name="message" placeholder="Say thank you, or some other note." rows="12"><?php echo(htmlentities( (htmlentities($transaction['message'])) )); ?></textarea>
      </div>
      <div class="form-group">
        <label for="tags">From</label>
        <input type="text" min="1" id="sender" name="sender" class="form-control" placeholder="Enter email from" value="<?php echo(htmlentities($transaction['sender'])); ?>" />
      </div>
      <div class="form-group">
        <label for="tags">To</label>
        <input type="text" min="1" id="receiver" name="receiver" class="form-control" placeholder="Enter email to" value="<?php echo(htmlentities($transaction['receiver'])); ?>" />
      </div>
      <div class="form-group">
        <div class="btn-toolbar align-middle">
          <button type="submit" class="btn btn-primary mr-1 d-flex justify-content-center align-content-between"><span class="material-icons">send</span>&nbsp;Send</button>
          <button class="btn btn-secondary mr-1 d-flex justify-content-center align-content-between" onclick="get('/index')"><span class="material-icons">cancel</span>&nbsp;Cancel</button>
        </div>
      </div>
      <input type="hidden" id="date" name="date" value="<?php echo(htmlentities($transaction['date'])); ?>" />
    </form>
  </div>
</div>

    </div>
    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">WEBD 236 examples copyright &copy; 2019 <a href="https://www.franklin.edu/">Franklin University</a>. Current time is <?php echo(htmlentities(date('Y-m-d H:i:s T'))); ?></span>
      </div>
    </footer>
  </body>
</html> 
