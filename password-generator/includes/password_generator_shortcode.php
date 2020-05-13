<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
//echo plugins_url('',__FILE__); die;

if(!function_exists('RPG_password_generator')){
function RPG_password_generator(){
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<style type="text/css">
		#generated_password{
  		background-color: lightgrey;
  		max-height: 70px;
  		height: 70px;
  		width: auto;
  		padding: 5px;
  		font-size: 22px;
  		text-align: center;
  		color: black;
  		border-radius: 15px;
  		margin-bottom: 5px;
  	}

  	#password_gen_div{
  		background-color: rgba(0,0,0,0.6);
  		margin-top: 5px;
  		color: white;
  		border-radius: 15px;
  		padding: 10px;
  	}
  	input{
  		margin-left: 3px;
  	}

  	img{
  		margin-left: auto;
  		margin-right: auto;
  		display: block;
  		height: 80px;
  		width: auto;
  	}

</style>
	<div id="password_gen_div">

		<h4>Password Generator</h4>
		<img src="<?php echo plugins_url('',__FILE__).'/pg.png'?>" height="100" width="auto">
		<div id="generated_password"></div>
		 <form  method="POST" > 
				<div class="form-group">
					<input type="checkbox" name="all" value="all" onchange="return generate_pw();"> All
				</div>
				<div class="form-group">
					<input type="checkbox" name="only_alphabet" value="only_alphabet" onchange="return generate_pw();"> Alphabet Only
				</div>
				<div class="form-group">
					<input type="checkbox" name="only_numbers" value="only_numbers" onchange="return generate_pw();"> Numbers Only
				</div>
				<div class="form-group">
					<input type="checkbox" name="only_specialcharacters" value="only_specialcharacters" onchange="return generate_pw();"> Special Characters Only
				</div>
				<div class="form-group">
					<label>Length:</label>
					<input type="number" name="length" id="length" class="form-control" onkeyup="return generate_pw(this.value);" placeholder="Default value is 30">
				</div>
				
				 </form> 
			
	</div>
	<script type="text/javascript">
		
		function generate_pw($len){

		//alert($len);

			var all = jQuery('input[name="all"]:checked').val();
			var only_alphabet = jQuery('input[name="only_alphabet"]:checked').val();
			var only_numbers = jQuery('input[name="only_numbers"]:checked').val();
			var only_specialcharacters = jQuery('input[name="only_specialcharacters"]:checked').val();
			
			var length = $len;
			//alert(length);
			var plugin_path = '<?php echo plugins_url('',__FILE__).'/generate_random_password.php'; ?>';
			
			//alert(plugin_path);
			var data = {

				"all":all,
				"only_alphabet":only_alphabet,
				"only_numbers":only_numbers,
				
				"only_specialcharacters":only_specialcharacters,
				"length":length

			}

			
		$.ajax({
				type:'POST',
				url:plugin_path,
				data:data,
				success:function(res){
					alert(res);
					jQuery("#generated_password").html(res);

				}
			});


	}

	</script>



	<?php
	}

}
add_shortcode('Generate-Password','RPG_password_generator'); //First aparameter is slider name and second parameter is function  name
?>