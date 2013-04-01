			<footer>
				<p>
					&copy; 2012-<?php echo date('Y'); ?> Lettermade
					<ul>
						<li class="instagram"><a href="#"></a></li>
						<li class="pinterest"><a href="#"></a></li>
						<li class="facebook"><a href="#"></a></li>
					</ul>
					
				</p>
				<p>
					<img src="img/footer_logo.png">
					 Design + Press  2325 Third Street, No.214, San Francisco, California 94107
				</p>

				<div style="clear: both"></div>
			</footer>
		</div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="jquery-1.9.1.min.js"><\/script>')</script>
        <script type="text/javascript">
        $(document).ready(function($){
        	// Give the 1st, last, and half-way points longer A widths.
        	var listItemCount = $('header nav .top_nav li').size() //Count # of nav items
        	var topItemRight = listItemCount/2; //Half of that
        	$('header nav .top_nav li').each(function(index){ //For each nav item
        		if (index < (listItemCount/2)) { 
        			$(this).addClass('group_a'); //If in the first half of the items, add class group_a
        		} else {
        			$(this).addClass('group_b'); //If in the second half of the items, add class group_b
        		}

        		//Hack to handle the selected state over 'cirle' graphic
        		if ($(this).hasClass('selected') && $(this).hasClass('group_a')) {
        			$(this).append('<img class="selected_item" style="left: -6px" src="img/circle.png">');
        		} else if ($(this).hasClass('selected') && $(this).hasClass('group_b')){
        			$(this).append('<img class="selected_item" style="right: -6px" src="img/circle.png">');
        		}
        	})
        	//Add the class to the right A tags
          	$('header nav .top_nav li a:first, header nav .top_nav li a:last, header nav .top_nav li a:eq(' + topItemRight +'), header nav .top_nav li a:eq(' + (topItemRight - 1) +')').css('width', '150px');


        });
        </script>
        <script>
            // var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            // (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            // g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            // s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
