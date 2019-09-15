<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Login form</h1>
            <?php if($this->session->flashdata('error')){ ?>
                <?php echo $this->session->flashdata('error'); ?>
            <?php }; ?>
            <?php echo form_open('login/checkUser')?>

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
                echo form_submit('Submit','Login','class="btn btn-primary"');
                ?>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>