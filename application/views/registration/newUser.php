<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Welcome in form</h1>
            <?php if($this->session->flashdata('error')){ ?>
            <?php echo $this->session->flashdata('error'); ?>
            <?php }; ?>
            <?php echo form_open('register/newUser')?>
                <div class="form-group">
                    <?php
                        $firstName =  array(
                                'name'=>'firstName',
                                'class'=>'form-control',
                                'placeholder'=>'First Name'
                            );
                        echo form_input($firstName);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    $lastName =  array(
                        'name'=>'lastName',
                        'class'=>'form-control',
                        'placeholder'=>'Last Name'
                    );
                    echo form_input($lastName);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    $email =  array(
                        'name'=>'email',
                        'class'=>'form-control',
                        'placeholder'=>'Email'
                    );
                    echo form_input($email);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    $password =  array(
                        'name'=>'password',
                        'class'=>'form-control',
                        'placeholder'=>'password'
                    );
                    echo form_password($password);
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    echo form_submit('Submit','Register','class="btn btn-primary"');
                    ?>
                </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>