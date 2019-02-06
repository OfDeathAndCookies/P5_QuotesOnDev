

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
        console.log(response);
        
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



// Submit a quote

jQuery(document).ready(function($){
  $( '#submitNewQuote' ).on( 'click', function(event) {
    event.preventDefault();

    let author = $( '#author' ).val();
    let quote = $( '#quote' ).val();
    let sourceQuote = $( '#source-quote' ).val();
    let sourceQuoteUrl = $( '#source-quote-url' ).val();

    $.ajax({
        method: 'POST',
        url: blue_vars.rest_url + "wp/v2/posts",
        data: {
          title: author,
          content: quote,
          _qod_quote_source: sourceQuote,
          _qod_quote_source_url: sourceQuoteUrl,
      },
        beforeSend: function(xhr) {
                xhr.setRequestHeader("X-WP-Nonce", blue_vars.wpapi_nonce);
              }
    }).done(function(data) {
      alert("it's working!");
    }).fail(function(data, status) {
      console.log("not working");
    });
  });  
});