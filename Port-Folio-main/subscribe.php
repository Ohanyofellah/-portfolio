<? php 
if($_POST['message']) {
	mail("ohanyofelix18@gmail.com",
	 subject, 
	 $_POST['message']
	)
}

?>