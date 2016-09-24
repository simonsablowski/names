<?php

$examples = array(
	array(
		'pattern' => '^.+i[^n]{1}a$',
		'options' => array(
			'female'
		),
		'explanation' => array(
			'ends with i followed by a letter other than n, then a'
		)
	),
	array(
		'pattern' => '^([^fgn]*)(i|y)([a-z]*)o([a-z]*)a$',
		'options' => array(
			'female'
		),
		'explanation' => array(
			'does not start with F, G or N',
			'contains i or y and o',
			'ends with a'
		)
	),
	array(
		'pattern' => '^([^fgkpqtxyz]*)a([^fgkpqtxyz]*)o([^fgkpqtxyz]*)(i|y)([^fgkpqtxyz]*)$',
		'options' => array(
			'male or female'
		),
		'explanation' => array(
			'contains no f, g, k, p, q, t, x, y or z',
			'contains a, o and i or y'
		)
	),
	array(
		'pattern' => '^([^befghikpqtuvwxz]*)(i|y)([^befgkpqtuvwxyz]*)o([^befgkpqtuvwxyz]*)$',
		'options' => array(
			'male'
		),
		'explanation' => array(
			'does not start with B, E, F, G, H, I, K, P, Q, T, U, V, W, X or Z',
			'contains no b, e, f, g, k, p, q, t, u, v, w, x, y or z',
			'contains i or y and o'
		)
	)
);