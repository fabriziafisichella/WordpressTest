<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

	<script type="text/javascript">
		let num = Math.floor(Math.random() * 100);
		let num2 = Math.floor(Math.random() * 40);
		const add = num + num;

		console.log("Easy addition. " + num + " + " + num2 + " = " + add);

		if (add > 50) { console.log("This is an interesting number!") }
		else { console.log ("This is a boring number." ) };
	</script>

</head>

<body id="colibri" <?php body_class(); ?>>
