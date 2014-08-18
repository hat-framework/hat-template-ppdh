// Mobile Safari in standalone mode
if(("standalone" in window.navigator) && window.navigator.standalone){

        // If you want to prevent remote links in standalone web apps opening Mobile Safari, change 'remotes' to true
        var noddy, remotes = false;

        document.addEventListener('click', function(event) {

                noddy = event.target;

                // Bubble up until we hit link or top HTML element. Warning: BODY element is not compulsory so better to stop on HTML
                while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                noddy = noddy.parentNode;
            }

                if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
                {
                        event.preventDefault();
                        document.location.href = noddy.href;
                }

        },false);
}

//special js for mobile tables
$(function() {

        $('table').each(function() {

                var titles = [];
                $(this).find('thead td').each(function() {
                        var name = $(this).text();
                        titles.push(name);
                });

                $(this).find('tbody tr').each(function() {
                        var count = 0;
                        $(this).find('td').each(function() {
                                $(this).attr('data-title', titles[count]);
                                count+=1;
                        });

                });


        });

        $('table tr, .list .list-item').each(function() {

                var showLink = $(this).find('.show');
                if(showLink.length > 0) {
                        var link = showLink.attr('href');
                        if(typeof(link) !== 'undefined' && link.length > 0) {
                                $(this).addClass('clickable');	
                                $(this).click(function() {
                                        location.href = link;
                                });
                        }				
                }

        });

});