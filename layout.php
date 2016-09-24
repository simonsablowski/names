<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Filtering names</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<header id="header">
			<h1 id="title">
				<a href="index.php" title="Reset all">Filtering names</a>
			</h1>
		</header>
		<div id="document">
			<div id="examples">
				<h2>
					Examples:
				</h2>
				<ol>
<? foreach ($examples as $example): ?>
					<li>
						<a href="index.php?<? echo $example['query']; ?>" title="<? echo implode('; ', array_merge($example['options'], $example['explanation'])); ?>"><? echo $example['pattern']; ?></a>
					</li>
<? endforeach; ?>
				</ol>
			</div>
			<div id="options">
				<form method="get" action="index.php">
					<p>
						<input id="pattern" type="text" name="pattern" value="<? echo $pattern; ?>">
					</p>
					<p>
						<input type="checkbox" name="genders[]" value="male"<? echo $male ? ' checked="checked"' : ''; ?>> male
						<input type="checkbox" name="genders[]" value="female"<? echo $female ? ' checked="checked"' : ''; ?>> female
					</p>
					<p>
						<input id="submit" type="submit" name="submit" value="Submit">
					</p>
				</form>
			</div>
			<div id="results">
<? foreach ($results as $n => $result): ?>
<? $blockSize = 5; ?>
<? if ($n % $blockSize == 0): ?>
				<ul>
<? endif; ?>
					<li>
						<? echo $result; ?>

					</li>
<? if ($n % $blockSize == $blockSize - 1 || $n == count($results) - 1): ?>
				</ul>
<? endif; ?>
<? endforeach; ?>
				<div class="clear"></div>
			</div>
		</div>
		<footer id="footer">
			<p id="copyright">
				&copy; 2010+2014 <a href="http://www.simsab.net" title="simsab">simsab</a> &mdash; currently, there are <? echo $numberNames; ?> names in the database.
			</p>
		</footer>
	</body>
</html>