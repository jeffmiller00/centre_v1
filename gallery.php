<?php 
$metas['title'] = "Photos of The Centre | Pictures of The Centre in Waverly, IA";
$metas['description'] = "The Centre Hall, located in Waverly, IA, is a fantastic place to have your event or community gathering. The Centre Hall is a great place to have a wedding reception, an estate auction, reunion, or any other get-together.";
$metas['keywords'] = "Photos of The Centre, Waverly, Iowa, IA, wedding, reception, reunion, wartburg, auction, hall, community center, the centre, banquet, gallery";
include_once 'header.php';
?>

<?php include_once('embed-facebook.php'); ?>

<?php echo sohail_embed_facebook_head(); ?>

<section>
	<article>
		<aside>
			<h2>Contact The Centre</h2>
			Phone: (319) 352-1386<br />
			Email: <a href="mailto:Questions@TheCentreHall.com">Questions@TheCentreHall.com</a><br />
			Affiliated Website: <a href="http://truevalue.com/waverly/">Miller True Value</a><br />
			<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FThe-Centre-Hall%2F175165545859897&amp;width=300&amp;colorscheme=light&amp;show_faces=false&amp;stream=false&amp;header=false&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:62px;" allowTransparency="true"></iframe>
		</aside>

		<h1 style="font-size: inherit;">Photos of The Centre</h1>

		<?php print sohail_do_embed("http://www.facebook.com/album.php?aid=35970&id=175165545859897"); ?>

	</article>

</section>

<?php include_once 'footer.php'; ?>