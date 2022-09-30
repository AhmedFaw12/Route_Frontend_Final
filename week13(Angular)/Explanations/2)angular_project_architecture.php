<!-- 
-go to (Angular.io) website then to docs to get all information about angular

-How to run angular project on browser:
    -angular project consists of modules (files connected to each other export and import)

    -Modules only work with the HTTP(s) protocol.
    -A web-page opened via the file:// protocol cannot use import / export.

    -so we need (Live Server) to make our project work:to simulate as if our project is running on real server 
    -angular has live server inside it (installed with it)

    -we will tell angular CLI to make live server work so our angular project will work , we will use this command:
    -but first we need to write this command inside our project folder:
        cd myProjectFolder
        ng serve --open

        -serve :means run server (go live)
        - --open : open on browser

    -every program in windows reserve certain port
    -sometimes when we write this command , it says to me port 4200 is already in use
    -then it asks me Would you like to use a different port? (y/n)
    -we will say y

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Angular Project Architecture:
    -angular works on Component-based-architecture(مبنى بنظام المكونات)
    -A component-based framework for building scalable web applications
    -angular consists of components that communicates with each other     


    -Component:
        -Components are the building blocks that compose an application
        -navbar, slider, footer, about , ... are components
        -component in angular consists of 3 things and a selector:
            -HTML file :has html code of this component
            -CSS file: has css code of this component
            -Typescript(ts) file: has typescript code of this component

            -selector: so that we can select our component in parent component 
            -then we use parent component in index.html

        -angular project starts from page called (index.html)
        -index.html is called entry point of our angular application
        
        -how to connect each component with the index.html:
            -we will choose a selector for each component :
                -selector is a tag that we will invent for component
                -when we put this tag in the index.html, selector will select component
                -this selector will get component code(html, css, ts) and put it inside the page where we use this selector

        -angular has main idea/concept: 
            -standalone component: each component is considered as a seperate(standalone) project
            
            -so that we can reuse this component in any other projects
            -angular is suitable for large/enterprise applications
        
        Parent(app) component:
            -our application may have 200 components
            -we will not put the 200 selector in index.html
            -so angular made a component that we be parent of the other components
            -this parent component is called (App Component)
            -this parent components has also 3 files and a selector:
                -app.component.html
                -app.component.css
                -app.component.ts

                <app-root></app-root> : is the selector made for parent component

            -so we will put components selectors in the parent component html
            -and we will use parent component selector in index.html 

        -index.html will only contain app/root component selector
        -if we want to make anything, make component for it, then put it inside app component

        
        Example:
            -we want to make home component :home page
            -this home page contains h1 that says home page
            -h1 need css color :red
            -event :when click on h1 , hellow alert appears

            -we will make 3 files : html, css, typescript
            
            -we will make about and contacts components , we will make 3files(html, css, ts) for each component

            -each component is a folder that contains 3 files(html, css, ts)

            -we will choose a selector for each component: 
                -<hambozo></hambozo> for home component
                -<app-about></app-about> for about component
                -<app-contacts></app-contacts> for contacts component

            
            -then we can use selector of each component in parent(app) component
            -then we will use app component selector in index.html
    
   
        
-->