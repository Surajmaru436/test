<?php 
if($_POST){
$obj=db('tusers');
unset($_POST['cpwd']);
if($obj->save($_POST)){
    Session::set('success',"Data saved Successfully");
    redirect('user.index');
}
}
?>
<div class="alert alert-primary h2 text-center a">
    Registration Form
</div>
<form method="post">
    <?php echo input('dname', 'Display Name', 'Enter Display Name', true); ?>
    <?php echo input('email', 'Enter Email', 'Enter Your Email', true, 'email'); ?>
    <?php echo input('mobile', 'Enter Mobile Number', 'Enter Mobile Number', true); ?>
    <?php echo input('pwd', 'Create Password', 'Enter Password', true,'password'); ?>
    <?php echo input('cpwd', 'Enter Confirm Password', 'Enter Confirm Password',true, 'password'); ?>
    <?php echo btn();?>
</form>