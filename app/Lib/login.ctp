<!-- start of container -->
<!-- Opens sign up as a modal -->
<div id="container" >
    <!-- Modal --> 
    <div>
        <div class="modal-dialog">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- INPUT FORM -->
                            <!-- to show the error message -->
                            <div id="errorLogin" class="alert alert-error"></div>
                            <?php echo $this->Form->create('Users', array('action'=>'login','class' => 'form-horizontal', 'role' => 'form', 'default'=>false)); ?>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <?php echo $this->Form->input('email', array('type' => 'email', 'maxlength' => '100', 'class' => 'form-control', 'placeholder' => 'example@example.com', 'label' => false, 'required', 'id' => 'inputEmail1')) ?>                     
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <?php echo $this->Form->input('password', array('type' => 'password', 'data-minlength' => '6', 'class' => 'form-control', 'placeholder' => 'Password', 'label' => false, 'required', 'id' => 'inputPassword')) ?>                     
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <?php echo $this->Form->input('remember_me', array('class'=>'checkbox', 'value' => 'Remember me', 'type' => 'checkbox','name' => 'remember-me')) ?>            
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <?php 
                                    echo $this->Form->submit('Log in', array(
                                        'class' => 'btn btn-lg btn-primary btn-block',
                                        'label'=> false));
                                    ?>
                                    
                                    <a data-toggle="modal" role="button" href="#forgotPasswordModal">Forgot password ?</a>
                                    <br />
                                    <br />
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>

<?php
// JsHelper should be loaded in $helpers in controller
// Form ID: #ContactsContactForm
// Div to use for AJAX response: #contactStatus
$data = $this->Js->get('#UsersLoginForm')->serializeForm(array('isForm' => true, 'inline' => true));
$this->Js->get('#UsersLoginForm')->event(
   'submit',
   $this->Js->request(
    array('action' => 'login', 'controller' => 'users'),
    array(
        'update' => '#errorLogin',
        'data' => $data,
        'async' => true,    
        'dataExpression'=>true,
        'method' => 'POST'
    )
  )
);
echo $this->Js->writeBuffer(); 
?>