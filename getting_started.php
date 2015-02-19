<div class="wrap">

	<h1><?php _e( 'IndieWebify your WordPress-Blog', 'indieweb' ); ?></h1>

	<h2><?php _e( 'Getting Started', 'indieweb' ); ?></h2>

	<p><?php _e( 'The IndieWeb Plugin can help you get set up to be a more active member of the indieweb. Required plugins make receiving indieweb comments and mentions work, recommended plugins further improve the experience.', 'indieweb' ); ?></p>

	<p><?php _e( 'Once you have these activated, you can setup <a href="https://www.brid.gy" target="_blank">Bridgy</a> to connect your blog to responses from sites such as Facebook and Twitter too, allowing for a seamless experience.', 'indieweb' ); ?></p>

	<h2><?php _e( 'Plugins', 'indieweb' ); ?></h2>

	<p><?php _e( 'For more information on these plugins, visit the <a href="http://indiewebcamp.com/wordpress" target="_blank">WordPress page</a> on the IndieWebCamp wiki or click the individual plugin links below.', 'indieweb' ); ?></p>

	<ul>
		<li>
			<h3><?php _e( 'Send and receive responses with your site', 'indieweb' ); ?></h3>
			<p><?php _e( 'Send and receive comments, likes, reposts, and other kinds of post responses using your own site!', 'indieweb' ); ?></p>
			<ol>
				<li><?php _e( '<strong>Webmention</strong> <em>(Required)</em> - allows you to send and receive by adding webmention support to WordPress. Mentions show up as comments on your site.', 'indieweb' ); ?></li>
				<li><?php _e( '<strong>Semantic Linkbacks</strong> <em>(Required)</em> - makes IndieWeb comments and mentions look better on your site.', 'indieweb' ); ?></li>
				<li><?php _e( '<strong>Webmention for (Threaded) Comments</strong> - Adds support for threaded comments for webmentions.', 'indieweb' ); ?></li>
				<li><?php _e( '<strong>Webactions</strong> - Adds webaction markups to WordPress elements.', 'indieweb' ); ?></li>
				<li><?php _e( '<strong>Post Kinds</strong> - Allows you to reply/like/RSVP etc to another site from your own, by adding support for kinds of posts to WordPress as a custom taxonomy.', 'indieweb' ); ?></li>
			</ol>
		</li>

		<li>
			<h3><?php _e( 'Syndicate your content to other sites', 'indieweb' ); ?></h3>
			<p><?php _e( 'Choose one of these different ways to display links for POSSE/syndicated versions of a post. They cannot both be used. Linking to the syndicated version of a post allows for bridgy to be able to discover the post as well as for end users to comment on those sites as a way of replying.', 'indieweb' ); ?></p>
			<ol>
				<li><?php _e( '<strong>Syndication Links</strong> - Adds fields to a post to allow manual entry of syndication links.', 'indieweb' ); ?></li>
				<li><?php _e( '<strong>WordPress Syndication</strong> - automatically adds link to a post from a supported syndication plugin. Fully supports Social, partial support for SNAP, and support for Bridgy Publish.', 'indieweb' ); ?></li>
			</ol>
		</li>

		<li>
			<h3><?php _e( 'Other', 'indieweb' ); ?></h3>
			<ol>
				<li><?php _e( '<strong>IndieWeb Press-This</strong> - Adds IndieWeb markup to the WordPressPress-This bookmarkets to allow you to respond on your site with one-click.', 'indieweb' ); ?></li>
				<li><?php _e( '<strong>Hum URL Shortener</strong> - A personal URL shortener.', 'indieweb' ); ?></li>
				<li><?php _e( '<strong>Indieauth</strong> - The plugin lets you login to the WordPress backend via IndieAuth. It uses the URL from the profile page to identify the blog user.', 'indieweb' ); ?></li>
			</ol>
		</li>
	</ul>

	<p><a href="<?php echo admin_url('options-general.php?page=indieweb-installer'); ?>" class="button button-primary"><?php _e( 'Install Plugins', 'indieweb' ); ?></a></p>

	<h2><?php _e( 'Themes', 'indieweb' ); ?></h2>

	<p><?php _e( 'Some WordPress themes are compatible with microformats. The IndieWeb uses microformats2, the latest version, to mark up sites so that they can be interpreted by other sites when retrieved. Most parsers will fall back onto the older format if available.', 'indieweb' ); ?></p>

	<p><?php _e( 'Formatting your site so other sites can consume the information allows for the communications IndieWeb sites support. For example, a class of u-like-of added to a link to a site you liked to indicates that relationship.', 'indieweb' ); ?></p>

	<p><?php _e( 'There is only one theme in the WordPress repository that is fully microformats2 compliant. That is Sempress.', 'indieweb' ); ?></p>

	<h2><?php _e( 'What is the IndieWeb?', 'indieweb' ); ?></h2>

	<p><?php _e( '<strong>Own your data.</strong> Create and publish content on your own site, and only optionally syndicate to third-party silos.', 'indieweb' ); ?></p>
	<p><?php _e( 'This is the basis of the <strong>Indie Web</strong>. For more, see <a href="http://indiewebcamp.com/principles" target="_blank">principles</a> and <a href="http://indiewebcamp.com/why" target="_blank">why</a>.', 'indieweb' ); ?></p>

	<p><?php _e( 'For even more information, please visit the <a href="http://indiewebcamp.com/" target="_blank"><em>IndieWebCamp</em> wiki</a>.', 'indieweb' ); ?></p>

</div>
