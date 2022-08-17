<!--  
what is CDN:
    -all online bootstrap links has the word CDN
    -CDN:Code Delivery Network
    -big companies has group of servers distributed worldwide(موزعة في جميع أنحاء العالم)
    -these servers has some files , and they give us links for these files
    -such that if we want to use a file online(instead of downloading it), we can take the link from the nearest sever and get the code 

    -Advantage of CDN:
        -advantage for clients:
            -when clients open website for the first time
            -browser caches(save in the ram) the css and js codes, so that when the browser open the website again , it won't need to read the css and js codes again
            -so the website will be faster 

            -if a developer uses the cdn links like:
                -<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
                -<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

                -there is high probability that these links have been opened before on the clients browser(cahced), so my website will faster at clients

                -but if the developer used offline links , then the client browser will need to read js and css codes and cache them for the first time, and my website will be slower

            -another advantage for developer:
                -in some cdn links , we can add @latest instead of the version number, and it will get me the latest version:
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   

    -Disadvantage of CDN:
        -inorder to use cdn , we must have internet connection
            -some websites can be opened offline
            -some companies build their internal system as an offline website , not a desktop application
            -so we can't use cdn
        -cdn is not secured:
            cdn can be hacked and files coming from it can be corrupted/modified and my website design will be corrupted
    
    -Don't use CDN when:
        -we have a doubt that client may use the website offline
        -we are afraid about security of our website
        


-->