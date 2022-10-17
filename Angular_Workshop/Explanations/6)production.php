<!-- 
production:
    -we need first to add {useHash:true} in app-routing.module.ts to solve paths issue on server
    -to understand more search for (HashLocationStrategy vs PathLocationStrategy)

    app-routing.module.ts:
        imports: [RouterModule.forRoot(routes, {useHash:true})],

    -then go to index.html:
        <base href="./">
        
    -then write this command : ng build
    
-->