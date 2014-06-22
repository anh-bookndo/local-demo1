
<!-- start of container -->
<!-- Opens sign up as a modal -->
<div id="container" >
    <!-- Modal --> 
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close fui-cross" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">SIGN IN</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- INPUT FORM -->
                            <?php echo $this->Session->flash('error_login') ?>
                            <?php echo $this->Session->flash('auth'); ?>    
                            <?php echo $this->Form->create('User', array('action'=>'login','class' => 'form-horizontal', 'role' => 'form')); ?>
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
                                    <?php echo $this->Form->end(array('class' => 'btn btn-lg btn-primary btn-block', 'name'=>'Sign in', 'label'=>'Sign in', 'method' => 'ajax')); ?>
                                    <a data-toggle="modal" role="button" href="#forgotPasswordModal">Forgot password ?</a>
                                    <br />
                                    <br />
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
