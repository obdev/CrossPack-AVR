<?
	global $prefix, $version, $pkgname, $pkgUnixName;
	$prefix = $_SERVER['argv'][1];
	$pkgname = $_SERVER['argv'][2];
	eregi('/([ a-zA-Z-]+)-([0-9.]+)$', $prefix, $regs);
	$pkgUnixName = $regs[1];
	$version = $regs[2];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?echo $pkgname?> - A Development Environment for AVR Microcontrollers</title>
<link rel="stylesheet" href="resources/style.css" type="text/css">
</head>
<body>
<?
function odImageTag($path, $altText, $align)
{
    global $lang;
    $fpath = $path;
    if(!file_exists($fpath)){	/* try to find at various places */
        $fpath = "$lang/$path";
        if(!file_exists($fpath)){
            $fpath = "default/$path";
            if(!file_exists($fpath))
                $fpath = "../default/$path";
        }
    }
    $size = getImageSize($fpath);
    $aligntag = $alttag = "";
    if($altText)
        $alttag = " alt=\"$altText\"";
    if($align)
        $aligntag = " align=$align";
    echo "<img src='$path' $size[3] border=0$alttag$aligntag>";
}
?>
<table border=0 cellspacing=0 cellpadding=0><tr>
<td valign=top align=left><div class="index">
<?odImageTag("resources/logo150.jpg", "Logo", "center");?>
<h3><?echo "$pkgname $version"?></h3>
<p>
<a href="index.html">Overview</a><p>
<a href="installation.html">Installation and Removal</a><p>
<a href="gettingstarted.html">Getting Started</a><p>
<a href="documentation.html">Documentation</a><p>
<a href="links.html">Links</a><p>
<a href="releasenotes.html">Release Notes</a><p>
<a href="licenses.html">Software Licenses</a>
</p>
</div></td>
<td bgcolor="#bbb" width=1></td><td width=20>&nbsp;</td>
<td valign=top align=left>
