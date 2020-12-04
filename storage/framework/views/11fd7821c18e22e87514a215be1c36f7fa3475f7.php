<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!--Bootsrap 4 CDN-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo e(url('style.css')); ?>">
    
</head>
<body>
    <div class="signup-form">	
        <form action="<?php echo e(url('post-registration')); ?>" method="POST" id="regForm">
            <?php echo e(csrf_field()); ?>

            <h2>Register Account</h2>
            <p class="lead">It's free and hardly takes more than 30 seconds.</p>
            <div class="form-group">
			    <div class="input-group">
				    <span class="input-group-addon"><i class="fa fa-user"></i></span>
				    <input type="text" class="form-control" id="inputName" name="name" placeholder="Username" required="required">
			    </div>
                <?php if($errors->has('name')): ?>
                    <span class="error"><?php echo e($errors->first('name')); ?></span>
                <?php endif; ?> 
            </div>
            <div class="form-group">
			    <div class="input-group">
				    <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email Address" required="required">
			    </div>
                <?php if($errors->has('email')): ?>
                    <span class="error"><?php echo e($errors->first('email')); ?></span>
                <?php endif; ?>    
            </div>
		    <div class="form-group">
			    <div class="input-group">
				    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
				    <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required="required">
			    </div>
                <?php if($errors->has('password')): ?>
                    <span class="error"><?php echo e($errors->first('password')); ?></span>
                <?php endif; ?>  
            </div>       
		    <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
            </div>
		    <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
        </form>
	    <div class="text-center">Already have an account? <a href="<?php echo e(url('login')); ?>">Login here</a>.</div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Blog\resources\views/registration.blade.php ENDPATH**/ ?>