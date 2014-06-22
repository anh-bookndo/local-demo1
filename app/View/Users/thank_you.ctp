      <div class="container">
         <div class="row">
            <div class="jumbotron">
               <h3><span class="bg-primary space-around">Thank you <?php echo $this->Session->read('User.email') ?> for signing up!</span> </h3>
               <p>Welcome to Bookndo. To activate your account check your email and follow the link. <br /> <small>Didn't get an e-mail? Click <strong> <a href="thank_you.html">here</a> </strong> to send again.</small></p>
               <a href="<?php echo $this->Html->url(array('controller'=>'pages', 'action'=>'display','home'))?>" class="btn btn-small btn-primary">Return to Main Page.</a>
            </div>
         </div>
      </div>
