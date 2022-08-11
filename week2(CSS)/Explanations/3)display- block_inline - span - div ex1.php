<!-- 
Div Example:
    -To implement a design:
        -always do the html first then the css
        -first do all html elements(that you need) then the css
        -always give elements background color to make things easier and clear
        -give images a width

    -When do we need div:
        if we have multiple elements that have something in common
        -ex:
            -p,button, img, h2 have width:100%
            -p,button, img, h2 have text-align:center
            -so we put them in div


    Example:
        style.css:
            h1,.member{
                text-align: center;
            }

            .o-letter{
                color: #09c;
                font-size: 80px;
            }

            .member{
                width: 33%;
                display: inline-block;
            }

            .member img{
                width: 100%;
            }

        index.html:
            <html>
                <head>
                    <link rel="stylesheet" href="style.css">
                </head>
                <body>
                    <h1><span class="o-letter">O</span>ur Team</h1>

                    <div class="member">
                        <img src="images/member-1.jpg" alt="Dr Ahmed Ali">
                        <h2>Ahmed Ali</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, perspiciatis provident aperiam quo minima reprehenderit exercitationem reiciendis ex accusantium beatae, illum porro omnis rem laboriosam accusamus, in repellendus cumque deserunt?</p>

                        <button>See More</button>
                    </div>
                    <div class="member">
                        <img src="images/member-2.jpg" alt="Dr Ahmed Ali">
                        <h2>Ahmed Ali</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, perspiciatis provident aperiam quo minima reprehenderit exercitationem reiciendis ex accusantium beatae, illum porro omnis rem laboriosam accusamus, in repellendus cumque deserunt?</p>

                        <button>See More</button>
                    </div>
                    <div class="member">
                        <img src="images/member-3.jpg" alt="Dr Ahmed Ali">
                        <h2>Ahmed Ali</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, perspiciatis provident aperiam quo minima reprehenderit exercitationem reiciendis ex accusantium beatae, illum porro omnis rem laboriosam accusamus, in repellendus cumque deserunt?</p>

                        <button>See More</button>
                    </div>
                </body>
            </html>

        -display:inline-block , makes space/margin between elements
        -so we gave each element width:33% not 33.33%(to take in consideration , margins made by inline-block)
        
        trick:
            -to remove spaces between elements, make close tag of div besides to open tag of the following div:
                <div>

                </div><div>
                    
                </div>
        
        -to make letter O bigger than other letters we have 2 solutions:
            1st solution:
                -put it in div and make it display:inline 
                style.css:
                    .o-letter{
                        color: #09c;
                        font-size: 80px;
                        display: inline;
                    }
                index.html:
                    <h1><div class="o-letter">O</div>ur Team</h1>
            2nd solution:
                -use span tag
                style.css:
                    .o-letter{
                        color: #09c;
                        font-size: 80px;
                    }
                index.html:
                    <h1><span class="o-letter">O</span>ur Team</h1>
        -we used grouping selectors:
                h1, .member has text-align:center, so make grouping selector:
                    h1,.member{
                        text-align: center;
                    }
        -we used nested selectors:
            -we want images inside member class to have width:100%;
            .member img{
                width: 100%;
            }
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Block vs Inline Elements:
    Block Elements:
        A block-level element always starts on a new line, and the browsers automatically add some space (a margin) before and after the element.

        A block-level element always takes up the full width available (stretches out to the left and right as far as it can).

        Two commonly used block elements are: <p> and <div>.

        -Here are the block-level elements in HTML:

            <address>   <article>   <aside>         <blockquote>
            <canvas>    <dd>        <div>           <dl>
            <dt>        <fieldset>  <figcaption>    <figure>
            <footer>    <form>      <h1>-<h6>       <header>
            <hr>        <li>        <main>          <nav>
            <noscript>  <ol>        <p>             <pre>
            <section>   <table>     <tfoot>         <ul>
            <video>
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------

    Inline Elements:
        -An inline element does not start on a new line.

        -An inline element only takes up as much width as necessary.

        -This is a <span> element inside a paragraph.
        
        -Here are the inline elements in HTML:

            <a>     <abbr>         <acronym>   <b>        <bdo>
            <big>   <br>           <button>    <cite>     <input>
            <code>  <dfn>          <em>        <i>        <img>
            <kbd>   <label>        <map>       <object>   <output>
            <q>     <samp>         <script>    <select>   <small>
            <span>  <strong>       <sub>       <sup>      <textarea>
            <time>  <tt>           <var>
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Span tag:
    -The <span> tag is an inline container used to mark up a part of a text, or a part of a document.

    -The <span> tag is easily styled by CSS or manipulated with JavaScript using the class or id attribute.

    -The <span> tag is much like the <div> element, but <div> is a block-level element and <span> is an inline element.
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Properties:
    -text-align:
        -The text-align property is used to set the horizontal alignment of a text.
        -A text can be left or right aligned, centered, or justified.
        -its default value is text-align:left;

        -When the text-align property is set to "justify", each line is stretched so that every line has equal width, and the left and right margins are straight (like in magazines and newspapers)

        -text-align:center:
            -makes the content inside an element to be in the center of that element
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------
    -display:
        The display property specifies the display behavior (the type of rendering box) of an element.

        Property values:
            inline:
                -dispaly:inline;

                -Displays an element as an inline element (like <span>). Any height and width properties will have no effect	
            block:
                display:block;

            	-Displays an element as a block element (like <p>). It starts on a new line, and takes up the whole width
            inline-block:
                display:inline-block;

                -inline-block took advantages from:
                    -inline:where it can get elements beside eachother
                    -block:where it can get elements width and height

                -Displays an element as an inline-level block container. The element itself is formatted as an inline element, but you can apply height and width values	

                -Note:
                    -display:inline-block , makes space/margin between elements
                
                trick:
                    -to remove spaces between elements, make close tag of div besides to open tag of the following div:
                        <div>
                            
                        </div><div>
                            
                        </div>

-->

