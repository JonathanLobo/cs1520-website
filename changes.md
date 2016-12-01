# What I Implemented After Part 1
Jonathan Lobo  
jpl68@pitt.edu  

## New Technologies Implemented
* PHP

## Changes
After finishing Part 1, I was quite pleased with the overall functionality and appearance of my website, so I initially focused mainly on fixing many minor bugs. I cleaned up my code by deleting some unnecessary CSS and JavaScript and improving the file tree. I also added a new link to my navbar that scrolls to the contact form. I also fixed a bug in my link scrolling that was incorrectly scrolling the desired location to the center of the window instead of the top. For the form itself, I greatly improved the appearance and functionality of the error handling by adding better styled test and used JavaScript to fade in the errors.

Next, I fixed one of the most noticeable issues with my site, which is that it did not display optimally in all window sizes. To do this, I took advantage of the grid structure from the Materialize framework. When I originally began working on my website, I started from a standard template, but I quickly got rid of the template because I found it too restrictive. The grid structure is what I ended up finding most useful about the framework, because it allowed me to display various elements on the page well in all window sizes by using just a few of the given classes.

Finally, I added PHP functionality. This was the most difficult part for me because I have never worked with PHP before. The main PHP functionality I added was to handle the contact form, connect to the server, and submit the entry to a database. Although I have worked with SQL before, it was never in this way. At my internship at a financial services company, we access the enormous company database of loan application data using SQL, but we don’t have write access to the database so my experience consisted of exclusively select statements. For my website, I was able to write queries to create a database, create a table, and insert data from the $_POST array into the table. I realized that I could improve the functionality by using AJAX to submit the form so that the entire page did not have to reload when a user submits the form.

Overall, this project allowed me to improve my skills at HTML and CSS, but more importantly I learned how to use JavaScript and PHP. I discovered the benefit of a dynamic site with server functionality over just a static site.

