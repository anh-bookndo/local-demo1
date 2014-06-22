<div id="signup">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <div class="container">
            <div class="row">
                <?php
                echo $this->Html->image("bookndo.png", array(
                    "alt" => "Bookndo-Logo",
                    'url' => array('controller' => 'pages', 'action' => 'display'),
                    'class' => "img-responsive center-block",
                    'id' => "from-top"
                ));
                ?>
            </div>
            <h3 class="bg-secondary text-warning caps-all">Sign up with mail</h3>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php echo $this->Session->flash('error_email') ?>
                    <form data-toggle="validator" role="form">
                        <div class="form-group">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"> First Name</span>
                                <?php echo $this->Form->input('first_name', array('maxlength' => '20', 'class' => 'form-control', 'placeholder' => 'First name', 'label' => false, 'required')) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"> Last Name </span>
                                <?php echo $this->Form->input('last_name', array('maxlength' => '20', 'class' => 'form-control', 'placeholder' => 'Last name', 'label' => false, 'required')) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"> P.O.BOX </span>
                                <?php echo $this->Form->input('POBOX', array('name' => 'data[User][pobox]', 'pattern' => '^([_0-9]){3,}$', 'maxlength' => '6', 'class' => 'form-control', 'placeholder' => '01360', 'label' => false, 'required')) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"> Phone Number </span>
                                <?php echo $this->Form->input('phone', array('pattern' => '^([_0-9]){3,}$', 'maxlength' => '13', 'class' => 'form-control', 'placeholder' => '+358 123 456 789', 'label' => false, 'required')) ?>                     
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"> Address </span>
                                <?php echo $this->Form->input('address', array('maxlength' => '30', 'class' => 'form-control', 'placeholder' => 'Address', 'label' => false, 'required')) ?>                     
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"> Email </span>
                                <?php echo $this->Form->input('email', array('type' => 'email', 'maxlength' => '100', 'class' => 'form-control', 'placeholder' => 'example@example.com', 'label' => false, 'required')) ?>                     
                                <br />
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="control-label">Password</label>
                                <div class="form-inline row">
                                    <div class="form-group col-sm-6">
                                        <?php echo $this->Form->input('password', array('type' => 'password', 'data-toggle' => 'validator', 'data-minlength' => '6', 'class' => 'form-control', 'placeholder' => 'Password', 'label' => false, 'required', 'id' => 'inputPassword')) ?>                     

                                        <span class="help-block">Minimum of 6 characters</span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <?php echo $this->Form->input('password-confirm', array('type' => 'password', 'data-match' => '#inputPassword', 'data-match-error' => "Whoops, these don't match", 'class' => 'form-control', 'placeholder' => 'Cofirm Password', 'label' => false, 'required', 'id' => 'confirmPassword')) ?>                     
                                        <div class="help-block with-errors"></div>
                                    </div>                                    
                                </div>
                            </div>
                        </div> 
                </div>
            </div>
        </div>
</div>
</fieldset>

<div class="center">
    <?php echo $this->Form->end(array('class' => 'btn btn-success', 'value' => 'Submit')); ?>        
</div>



