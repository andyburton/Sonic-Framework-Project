<?php

// Smarty parse_content function

function smarty_function_parse_content ($params, &$tpl)
{
	
	$content	= isset ($params['content'])? $params['content'] : FALSE;
	$replace	= isset ($params['replace'])? $params['replace'] : FALSE;
	
	if (!$replace)
	{
		return '';
	}
	else if ($replace instanceof \Sonic\Model)
	{
		$replace	= $replace->toArray ();
	}
	
	if (!$content)
	{
		$page		= $tpl->getTemplateVars ('page');
		$content	= $page->getContent ();
	}
	
	$patterns		= array_keys ($replace);
	$replacement	= array_values ($replace);
	
	foreach ($patterns as &$pattern)
	{
		$pattern	= '/\{' . $pattern . '\}/';
	}
	
	$content		= preg_replace ($patterns, $replacement, $content);
	
	return $content;
	
}