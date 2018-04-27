/*
* Mailchimp API JS for AccuProSports
*/

jQuery(document).ready(function($) {
    
        // process the form
        $('.email-footer').submit(function(event) {
    
            // get the form data
            // there are many ways to get this data using jQuery (you can use the class or id also)
            var formData = {
                'name'              : $('input[name=name]').val(),
                'email'             : $('input[name=email]').val(),
            };
            
            console.log(formData);

            // process the form
            $.ajax({
                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : '/wp-content/themes/generatepress-child/process-mail-chimp.php', // the url where we want to POST
                data        : formData, // our data object
                dataType    : 'json', // what type of data do we expect back from the server
                encode      : true
            })
                // using the done promise callback
                .done(function(data) {
                    
                    // log data to the console so we can see
                    console.log(data); 
                    $(".email-footer").replaceWith("<p>Thanks for signing up!</p>")
                    $(".form-text").hide();
                    // here we will handle errors and validation messages
                });
            
            // stop the form from submitting the normal way and refreshing the page
            event.preventDefault();
        });

        


        // process the form
        $('.email-about-form').submit(function(event) {
                    // get the form data
                    // there are many ways to get this data using jQuery (you can use the class or id also)
                    var formData = {
                        'name'              : $('input[name=name]').val(),
                        'email'             : $('input[name=email]').val(),
                        'message'           : $('textarea').val()
                    };
                    
                    console.log(formData);
        
                    // process the form
                    $.ajax({
                        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                        url         : '/wp-content/themes/generatepress-child/process-contact-form.php', // the url where we want to POST
                        data        : formData, // our data object
                        dataType    : 'json', // what type of data do we expect back from the server
                        encode      : true
                    })
                        // using the done promise callback
                        .done(function(data) {
                            
                            // log data to the console so we can see
                            console.log(data); 
                            $(".email-about-form").replaceWith("<p>Thanks for contacting us, we will respond ASAP!</p>")
                            $(".form-text").hide();
                            // here we will handle errors and validation messages
                        });
                    
                    // stop the form from submitting the normal way and refreshing the page
                    event.preventDefault();
                });


    
    });