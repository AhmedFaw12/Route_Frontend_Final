<!--  
Production:
    -we want to make production
        
    -all this time we were in the development:
        -we are writing ts the needs to convert to js
        -scss files needed to be converted to css
        -many file we installed and not used

    -production steps:
        1)go to index.html:
            <base href="./">
        
            -put . before / 
        2)write this command:
            ng build

            -if we have any error, production will not be produced
            -so we should do production after each phase or  every interval

            -this command will convert all scss files into css , and put all css files into one file , and minify this css file
            -convert all ts files into js , and put all js files into 3 or 4 files , and minify these js files
            -take all html files and put them in one file(index.html) and minify 
            
            -it will not delete old files  
            -it will produce another folder for production, this folder is the project that we will upload
            -it will not delete old files , so that we can modify what we want and make another produce when we want

            -dist folder is produced containing our project
            -dist folder size is too much smaller than development project
            -production project will work only on server (local server(like live server) , real server)
            -because our code contain imports and exports and these work only on server

    -To run production project on local server:
        -open production project on vscode
        -right click on index.html, open with live server
        
    -To upload production project on real server:
        -we need domain(url) , and we need host(server)
        -so we want to rent host and rent domain from host
        -famous hosting sites:
            -godaddy:
                -most famous site
            -bluehost:
                -eng/Bahnasy likes it very much
                -least price

            -hostgator:
                -biggest site for hosting

        -hosting types:
            -shared hosting:
                -me and other people websites share same server
                -we share same RAMs, proccessor, ...
                -least price
                -we don't own the server
                -we can't change/install anything in the server
                -not recommended 
                -it is used for testing my domain only

                on bluehost :
                    -prices start from 4$/month
                    -it gives me 50GB SSD storage
                    -it gives me Free domain for a year
                    -Free SSL certificate for the first year
                    -SSL :that make my domain (https) for security and SEO
            
            -VPS hosting:
                -VPS(Virtual Private Server)
                -it is also shared like shared hosting
                -difference between shared hosting and VPS:
                    -in VPS, we can install my programs, setup my Operating system,...
                    -in VPS less people share host
                
                -more price than shared hosting

            -dedicated hosting:
        
                -rent server for me only not shared with anyone
                -we can install my programs, setup my Operating system,...
                -most expensive

        --------------------------------------------------------------------------------------------------------------------------------------------------------
        
        -for our example:
            -go to bluehost 
            -shared host
            -write your domain and check it is not taken (domain must be unique)
            -enter your info and credit card
            -we got our domain
            -also it will send me an email containing cpanel username and password

            -after getting my domain, make /cpanel:
                myproject.com/cpanel

            -write cpanel username, panel
            -then go to Files => file manager => public_html
            -if we clicked on upload and uploaded our project:
                -anyone who writes :myproject.com will open my website
            
            -if we want to upload project when client writes: myproject.com/project1
            -then make project1 folder inside public_html and open it and then upload the product project compressed

            -after we upload compressed project, uncompress project => then copy all files inside it and move them out 

            -and we are done

            -if we want to modify project , select all files on cpanel and delete them and upload new files

    -cpanel (control panel):
        -control panel(غرفة تحكم) for this domain

        cpanel consists of multiple sections:
            -email/email accounts:
                -we can make email on this domain example:
                    ahmed@myproject.com

                -we make email by our domain so that we can send offers to other company 

            -FILES:
                -file Manager:
                    -public_html:
                        -folder
                        -root of my server   
                        -anything we want to upload on server , upload it in public_html
                        
            -Databases
            -Metrics:
                -reports for my domain 

                -visitors: how many users entered my domain
                -bandwidth: 
                    -how many users can my server bear(يستحمل) at same time
                    -عندما يتجاوز الحد المسموح ,يقع السيرفر




        
                
                    


-->