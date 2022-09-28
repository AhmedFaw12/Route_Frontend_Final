<!-- 
NPM:
    -libraries in our project can depend on other libraries
    -Example :
        -my project depends on bootstrap
        -and bootstrap depend on popper, .
        -popper may depend on other things

        -dependancy graph will occur
        -this(dependancy graph) causes problems in many things:
            1)when moving our project from one environment to another one
            -for example , i will give my project to the tester to test the project
            -the tester needs to install all the dependancies and the dependancies of the dependancies, .....
            2)each library has certain version(ex: boostrap5, ...)
            3)some dependancies are needed only for development (when writing code only) , we don't need these dependancies during production phase(uploaded project on server)
                -for example:
                    -there is a library that convert (sass) to (css)
                    -we need this library only during development(when writing code)
                    -once we uploaded project on server , we don't need this library
                -for example:
                    -webpack :collects code that we write in less files 
                    -it is only needed in development
                    -once we uploaded project on server , we don't need (webpack)
                    
                    -(Webpack) is a tool that lets you compile JavaScript modules, also known as module bundler. Given a large number of files, it generates a single file (or a few files) that run your app. It can perform many operations: helps you bundle your resources. watches for changes and re-runs the tasks.

                -this is called development depandancies: dependancies needed only during development phase
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    What is NPM ?
        -NPM (Node Package Manager)
        -Package is library(js file)
        -npm manages all my packages

        -npm is a package manager for js files/libraries

        -All npm packages are defined in files called package.json.
        -The content of package.json must be written in JSON.
        -At least two fields must be present in the definition file: name and version.
        
        -npm includes a CLI (Command Line Client) that can be used to download and install software:
            -npm install <package>
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    How to install NPM?
        -node js : environment/tool made js can work as backend (js can deal with database)
        -nodejs made npm
        -npm is installed with Node.js
        -This means that you have to install Node.js to get npm installed on your computer.
        -Download Node.js from the official Node.js web site: https://nodejs.org
        -when we enter the website we will find two download links:
            -16.17.1 (LTS): lts means Last Stable Version (has no problems)
            -18.9.1 Current: current means latest version (may have problems)
        
        -we will download LTS version(stable version) of nodejs
        -install nodejs (next -> next -> next -> finish)
        -check versions of nodejs and npm using CLI: node -v , npm -v 
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    How to read version number:
        -version number consists of 3 numbers : ex : 16.17.1
        -first number (16) is called major 
            -huge modifications
        -(17) is called minor:
            -used for uploaded new feature/modification
            -this feature/modification is neither bug fixing nor breaking(huge) feature
            -for example : new function/property/method
        -(1) is called patch:
            -small modification
            -used for bugs fixing
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    What can NPM do?
        -Managing Dependencies:
            -npm can manage dependencies.
            -npm can (in one command line) install all the dependencies of a project.
            -Dependencies are also defined in package.json.

        -Publishing a Package:
            -You can publish any directory from your computer as long as the directory has a package.json file.
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    3 ways to open terminal:
        1)press SHIFT + right Click on certain folder -> then open powershell
        2)enter folder and write above (cmd) then press enter
        3)using vscode press(CTRL + ذ) 

    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    Commands of npm:
        npm init :
            -we want npm to work on my project
            -then press enter 
            -it tell me to write:
                - my package/project name
                - project version 
                - project description
                - entry point(main js file of my project)
                - test command 
                - git repository to upload my project on if i want
                - keywords :write any keywords related to my project
                - author of the project
                - license : (ISC) 
            -it will collect all my answers in a (package.json) file
            -then press enter

            -package.json:
                -it is considered a referance file for my project
        ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        npm install <package name>:
            -previously , to install library(jquery), we will go to jquery website , download file . (if we want to install old version of jquery , it will not be easy)
            
            -now , to install a package/library , we will use npm command
            Example on installing jquery version 1.2.0:
                npm i jquery@2.2.0
                    or
                npm install jquery@2.2.0

                -if i want latest version of jquery : npm i jquery

            - all libraries/dependancies are downloaded in node_modules folder
            - a new property(dependancies) will be added to package.json containing all libraries that we will depend on
            - also (package-lock.json) file will be created when package.json changes
            - (package-lock.json) will be updated with every change in package.json
            - (package-lock.json) is considered a history of my project  

            Example on installing popper:
                npm install popper.js

            Note:
                - if we installed bootstrap using npm, nom will not install its dependancies(popper, ..)
                - npm will not install bootstrap dependancies because bootstrap can work normally in most component without popper or jquery
                
                -npm will install package other dependancies , if it cannot work without them
        
                
        ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        - npm install live-server --save-dev:
            - previously , we installed extension (live server) using vscode
            - we can install this extension package using npm :
                -(because we may work with different editor other than vscode that may not have this extension)
                -or if this extension may cause conflict with another extension
            
            -this live-server package has too many dependancies
            -live server extension uses web technology called : (Socket) :
                -socket (خرطوم) between editor and browser
                -so that any update occur in editor , it will be displayed in browser at once

            -we only live-server during development only : so we will use (--save-dev)
            -we tell npm to save live-server package in developmentDependancies
            -devDependancies will be added to package.json 

            - live-server package contain many dependancies that have also another dependancies

            -note:
                -at the end of our project , we will make production (upload on server)
                -npm removes all devDependancies with all of its dependancies
        ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        npm list:
            - to list the top level dependancies that we have
            - live-server package contain many dependancies that have also another dependancies`

            -note:
                npm list === npm list --depth=0
        ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        npm list --all: 
            - to list the full tree dependancies that we have
        ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        npm install:
            -install all the dependencies of a project (which are listed in package.json)

            - our project can be small size , but nodes_module folder size is very large
            - so if we want to transfer our project to another location, it will take much time
            - so we can transfer our project without nodes_module 
            - then at the new location , we will write (npm install)
            - it will install/download all dependancies of my project (which are listed in package.json) 
-->