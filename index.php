<?php
/**
 * Price Check for Born
 */

 require_once 'config.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>born eval</title>
		<link rel="stylesheet" href="app/scripts/style.css"/>
	</head>
	<body>
		<div class="main_div">
			<fieldset>
				<legend>Price Check Scanner Test</legend>
				<div class="tooltip_main">
					<div class="help">
						<div class="tooltip">
							<p>
								<p>Product Code | Price</p>
								<p>--------------------</p>
								<p>A | $2.00 each or 4 for $7.00</p>
								<p>B | $12.00</p>
								<p>C | $1.25 or $6 for a six pack</p>
								<p>D | $0.15</p>
								<p>There should be a top level point of sale terminal service object that looks something like the pseudo-code below. You are free to</p>
								<p>design and implement the rest of the code however you wish, including how you specify the prices in the system:</p>
								<p>terminal->setPricing(...)</p>
								<p>terminal->scan("A")</p>
								<p>terminal->scan("C")</p>
								<p>... etc.</p>
								<p>result = terminal->total</p>
								<p>Here are the minimal inputs you should use for your test cases. These test cases must be shown to work in your program:</p>
								<p>Scan these items in this order: ABCDABAA; Verify the total price is $32.40.</p>
								<p>Scan these items in this order: CCCCCCC; Verify the total price is $7.25.</p>
								<p>Scan these items in this order: ABCD; Verify the total price is $15.40.</p>
							</p>
						</div>
					</div>
				</div>
				<div class="scanner_main">
					<div class="scanner">
						<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="target">
							<div class="scanner_input">
								<label>Scan items: </label>
								<input type="text" name="product_txt" value="ABCDABAA"/>
								<button type="submit" name="submit" id="process">Submit</button>
							</div>
							<span>EXAMPLES: CCCCCCC ABCDABAA or ABCD</span>
						</form>
					</div>
					<div class="result">
						<?php $scanner = new Scanner(); ?>
						<?php $scanner->startProcess(); ?>
					</div>
				</div>
			</fieldset>
		</div>
	</body>
</html>
