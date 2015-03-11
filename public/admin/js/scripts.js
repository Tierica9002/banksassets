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
                for (var i = 0; i < idsArr.length; i++) {
                    idsStr += idsArr[i] + ',';
                }


                idsStr = idsStr.substring(0, idsStr.length - 1);
                $('#contact-ids').val(idsStr);
            });
            $('#check-all').click(function() {
                if ($(this).is(':checked')) {
                    $('.contact-cb').prop('checked', true);
                } else {
                    $('.contact-cb').prop('checked', false);
                }
            });
        }
        if ($('#add-villa').length > 0) {
            $('#add-villa-submit').click(function() {
                $('#add-villa').submit();
            });           
        }
        if ($('#add-industrial').length > 0) {
            $('#add-industrial-submit').click(function() {
                $('#add-industrial').submit();
            });
        }
        if ($('#add-land').length > 0) {
            $('#add-land-submit').click(function() {
                $('#add-land').submit();
            });
        }
        if ($('#add-office').length > 0) {
            $('#add-office-submit').click(function() {
                $('#add-office').submit();
            });
        }
        
        if ($('.add-floor').length > 0) {            
            $('.add-floor').click(function(e){                
                var numberOfFloors = $('[name="surface[]"]').length;
                e.preventDefault();
                $('#floors').append('<div class="col-sm-2"><label>Etaj '+(numberOfFloors+1)+'</label><a href="#" class="delete-floor">Sterge Etaj</a></div>');
                $('#floors').append('<div class="col-sm-5"><div class="form-group form-group-default"><input class="form-control" placeholder="Suprafata" name="surface[]" type="text"></div></div>');
                $('#floors').append('<div class="col-sm-5"><div class="form-group form-group-default"><input class="form-control" placeholder="Cost Chirie" name="rent_cost[]" type="text"></div></div>');                
                $('#floors').append('<div style="clear:both;"></div>');
            });
        }
        
        if ($('.delete-floor').length > 0) {
            
            $('.delete-floor').click(function(e){                
                $(this).parent().parent().remove();
            });
            
        }
    });

})(window.jQuery);