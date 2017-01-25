# WordPress-Responsive-Featured-Images

Add the code from functions.php into your functions file. Change your-image-name to whichever type of image you want i.e. News Thumb, News Featured etc. You can change the numbers to whichever max size you want the image to be. 

In the example 300 = width, 200 = height.

Use the code from page.php inside your page/post template where you want to display the image. Change your-image-name to match what you set up in functions.php

You can add more image sizes in functions.php like so:

if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'your-image-name', 300, 200, true ); 
add_image_size( 'another-image', 400, 250, true ); 
}
