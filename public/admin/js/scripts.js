(function($) {

    $(document).ready(function() {
        // Initializes search overlay plugin.
        // Replace onSearchSubmit() and onKeyEnter() with 
        // your logic to perform a search and display results
        $(".list-view-wrapper").scrollbar();

        $('[data-pages="search"]').search({
            searchField: '#overlay-search',
            closeButton: '.overlay-close',
            suggestions: '#overlay-suggestions',
            brand: '.brand',
            onSearchSubmit: function(searchString) {
                console.log("Search for: " + searchString);
            },
            onKeyEnter: function(searchString) {
                console.log("Live search for: " + searchString);
                var searchField = $('#overlay-search');
                var searchResults = $('.search-results');

                clearTimeout($.data(this, 'timer'));
                searchResults.fadeOut("fast");
                var wait = setTimeout(function() {

                    searchResults.find('.result-name').each(function() {
                        if (searchField.val().length != 0) {
                            $(this).html(searchField.val());
                            searchResults.fadeIn("fast");
                        }
                    });
                }, 500);
                $(this).data('timer', wait);

            }
        });
        if ($('#create-xls').length > 0) {
            var idsArr = [];
            
            $('.contact-cb').click(function() {
                var idsStr = '';
                if ($(this).is(':checked')) {
                    idsArr.push($(this).val());
                } else {
                    var index = idsArr.indexOf($(this).val());
                    idsArr.splice(index, 1);
                }                
                for (var i=0; i<idsArr.length; i++) {                    
                    idsStr += idsArr[i] + ',';
                }
                
               
                idsStr = idsStr.substring(0, idsStr.length - 1);
                $('#contact-ids').val(idsStr);
            });
            $('#check-all').click(function(){
                if ($(this).is(':checked')) {
                    $('.contact-cb').prop('checked', true);
                } else {
                    $('.contact-cb').prop('checked', false);
                }
            });
        }
    });

})(window.jQuery);