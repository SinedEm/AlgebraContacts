<?php

  require_once 'core/init.php';
  
  Helper::getHeader('Algebra Contants', 'header');
  $db = DB::getInstance()->query("SELECT * FROM users WHERE id =");
  echo '<pre>';
  //var_dump($db);
  if($db->count() > 0){
  foreach ($db->results() as $result) {
	  echo $result->name;
    }
  } else {
	  echo 'Trenutno nema podataka u bazi!';
  }
  ?>
  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <div class="container">
                    <h1>Algebra Contacts</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et dolor sapien. Morbi faucibus, lacus a ornare finibus, justo nisl interdum turpis, et ornare diam libero eget leo.</p>
                    <p>
                        <a class="btn btn-primary btn-lg" href="login.php" role="button">Sign In</a>
                        or
                        <a class="btn btn-primary btn-lg" href="register.php" role="button">Create an account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
	
<?php
  Helper::getFooter();
  ?>