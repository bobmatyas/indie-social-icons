(function () {
	
	// Add "u-url" class to all links with rel="me" attribute
	const relMeSocialLinks = document.querySelectorAll( 'li.wp-social-link > a[rel="me"]' );
	
	if ( ! relMeSocialLinks >= 1 ) {
		return
	} else {
		relMeSocialLinks.forEach( ( link ) => {
				link.classList.remove( 'wp-block-social-link-anchor' );
				link.classList.add( 'u-url' );
			}
		);
	}
	
  })();
