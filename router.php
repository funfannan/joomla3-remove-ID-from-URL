// In /components/com_content/router.php replace this:
// $advanced = $params->get('sef_advanced_link', 0);
// With this two times:

$advanced = $params->get('sef_advanced_link', 1);

// AND comment out
if (strpos($segments[0], ':') === false)
{
	$vars['view'] = 'article';
	$vars['id'] = (int) $segments[0];

	return $vars;
}

// LIKE
//			/*if (strpos($segments[0], ':') === false)
//			{
//				$vars['view'] = 'article';
//				$vars['id'] = (int) $segments[0];
//
//				return $vars;
//			}*/
