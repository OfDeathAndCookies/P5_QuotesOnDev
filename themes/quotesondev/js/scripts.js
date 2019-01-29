

// REST API
'use script'
jQuery(function(){
  jQuery("#other-phrase-btn").on("click", function(event) {
      event.preventDefault();
      jQuery.ajax({
        method: "GET",
        url: blue_vars.rest_url + "wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1",
        //security stuff
        beforeSend: function(xhr) {
          xhr.setRequestHeader("X-WP-Nonce", blue_vars.wpapi_nonce);
        }
      }).done(function(response) {
        //Remove content and substitute
        
        jQuery("#phrase").html(response[0].content.rendered);
        jQuery("#author").html(response[0].title.rendered);
        console.log(response);

        const sourceUrl = response[0]._qod_quote_source_url;
        const source = response[0]._qod_quote_source;

        if (sourceUrl){
            jQuery("#author-link").html(`,&nbsp <a href="${sourceUrl}"> ${source} </a>`);
          }else if (!sourceUrl && source){
            jQuery("#author-link").html(",&nbsp" + source);
          }else {
            jQuery("#author-link").html('');
          }

        window.history.pushState(null, null, "/P5_Quotesondev/" + response[0].slug);
      });
    });
});

