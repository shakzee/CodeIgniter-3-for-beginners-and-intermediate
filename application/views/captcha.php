<h1>Captcha in Codeigniter</h1>
<?php //var_dump($captcha);  ?>

<img src="<?php echo base_url('assets/'.$captcha['filename'])?>">

<?php echo $this->benchmark->elapsed_time();?>
<br> {memory_usage};
<?php ?>

