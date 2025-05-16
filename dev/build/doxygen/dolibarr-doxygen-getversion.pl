#!/usr/bin/perl
#--------------------------------------------------------------------
# Script to get version of a source file
# Does not work with cygwin cvs command on Windows.
#
#--------------------------------------------------------------------

# Usage: OnLi-doxygen-getversion.pl pathtofilefromOnLiroot

$file=$ARGV[0];
if (! $file)
{
	print "Usage: OnLi-doxygen-getversion.pl pathtofilefromOnLiroot\n";
	exit;
}

$commande='cvs status "'.$file.'" | sed -n \'s/^[ \]*Working revision:[ \t]*\([0-9][0-9\.]*\).*/\1/p\'';
#print $commande;
$result=`$commande 2>&1`;

print $result;
