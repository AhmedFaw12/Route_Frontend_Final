<!-- 
Regex:
    -inputs are the most vulnerable tag , They are the enterance for hacking
    -they can be hacked using sql-injection(injecting bad queries)

    -so we need to make validation(تحقق) for inputs:
        -we need to make validations according to semantically(معنوى) and security
        semantically : input value should be meaningly correct Example:toshiba
        -bad Example: 2(#$#&!*#&#*@) 

        -security: handle bad queries , ... 
    
    -so we will learn Regular Expression:
        -Regular expressions are patterns used to match character combinations in strings

        -regular expression is case sensitive
        -website to test regular Expression: regex101.com

        Example:
            /^[A-Z][a-z]{3,6}/
            -first letter must be capital
            -then 3 to 6 small letters

    -How to write regular expression in js:
        -we must put regular expression code between double slashes(//), so that js know that the code is reuglar expression:
            var x= /our Regular Expression/


        Example:
            var x = /web/; 
            -our input value must contain (web)
            
    -Regular Expression symbols:
        The square brackets ( [ ] ):
            Example:
                var x = /[ab]/ 
                -our word must contain a or b
                -3a3 ==> true
                -3ab3 ==>true
                
            Example:
                var x = /[ab12]/
                -a or b or 1 or 2 is allowed
                
                var x = /[1080]/
                - 1 or 0 or 8  are allowed
            
                var x = /[abc345]/
                -a or b or c or 3 or 4 or 5
        
            Example:
                -we want to enter any number small
                -we will use dash(-)
                var x = /[a-z]/
                
                -a to z are allowed
            Example:
                var x = /[a-z0-9]/
                -(a to z) or (0-9) are allowed

                20 ==> true (contain 0 and 2)
            Example:
                var x = /[23-58]/

                -2  or 3 to 5 or 8  are allowed
            Example:
                var x = /web[0-9 a-b]web/
                
                -our string must contain (web followed by 0 to 9 or space or a to b followed by web
                
                var name = #$@#$ web3web @#@# ; //mathces our pattern
                var name2 = #$@#$ web web @#@# ; //mathces our pattern

            Example:
                var x = /web[0-9][0-9][0-9]web/

                -web followed by 3 numbers each (from 0 - 9) followed by web
        ------------------------------------------------------------------------------------------------------------------------------------------------------

        curly brackets {}:
            -to specify a number of times a character can appear in a string

            Example:
                var x = /web[0-9]{5}web/
                -our string must contain web followed by 5 numbers (0 to 9) followed by web

            Example :
                var x = /web[0-9]{5,8}web/
                -our string must contain web followed by (from 5 to 8 ) numbers (0 to 9) followed by web
            Example:
                var x = /web[0-9]{5,}web/
                -our string must contain web followed by (from 5 to unlimited ) numbers (0 to 9) followed by web

               -ahmedweb23232webmohame  ===>match 
        
        ------------------------------------------------------------------------------------------------------------------------------------------------------

        The caret ( ^ ) :
            -The caret symbol is used to signify that the match must start at the beginning of the string

            Example:
                var x = /^web[0-9]{5}web/

                -our string must start with web followed by 5 numbers (0 to 9) followed by web

        ------------------------------------------------------------------------------------------------------------------------------------------------------

        dollar sign ( $ ):
            -the dollar sign means that the match must occur at the end of the string



            Example:
                var x = /^web[0-9]{5}web$/

                -our string must start and end with web followed by 5 numbers (0 to 9) followed by web

                -web2322323web ==>match
                ahmedweb2322323web ==>no match
                ahmedweb2322323webahmed ==>no match
                web2322323webahmed  ==>no match

        ------------------------------------------------------------------------------------------------------------------------------------------------------

        The optional character ( ? )
            ? ==> means 0(nothing) or 1(happen 1 time only)
            Example:
                var x = /^web[0-9]{2}[a-z]?web$/

                -our string must start and end with (web followed by 2 numbers followed by 0 or 1 letter followed by web)

                -web23web ==>match
                -web23aweb ==>match
            Example:
                var x = /^002?$/
                the ? is on 2 only
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        The parentheses ( ( ) ):
            -The parentheses are used to group symbols together so that they act as a single unit.
            Example:
                var x = /^(002)?01[0125][0-9]{8}$/

                -? is applied on 002 because they are inside parentheses
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        The plus symbol ( + ):
            + ==>means 1 or more

            Example:
                var x = /^web[0-9]{2}[a-z]+web$/

                -web23web ==>no match
                -web23aweb ==>match
                -web23asdweb ==>match
        ------------------------------------------------------------------------------------------------------------------------------------------------------

        -The asterisk ( * ):
            * ==> means 0 or more

            Example:
                var x = /^web[0-9]{2}[a-z]*web$/

                -web23web ==>match
                -web23aweb ==>match
                -web23asdweb ==>match
            Example:
                var x = /^web[0-9]{2}[a-zA-z]*web$/

                -web23web ==>match
                -web23aVweb ==>match
                -web23aSdweb ==>match
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        The vertical bar ( | ):
            -to act as or between multiple options(maybe whole words)
            Example:
                var x = /^web ?(design|development)/

                -we want user to write web 
                -they maybe have space or not
                -then write design or development
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        The escape symbol ( \ ):
            -An obvious side effect of using characters as pattern matchers is that you then can’t use the character as an actual character. The escape symbol solves this problem

            Example:
                var x = /^([1-7][0-9]|80)\$$/

                we can write $ in our string
            Example:
                var x = /^([1-7][0-9]|80)\\$/
                -we can write \ in our string
        ------------------------------------------------------------------------------------------------------------------------------------------------------
        The wildcard ( . ):
            The wildcard represents any character(letters , symbols, numbers ,...)
            
    --------------------------------------------------------------------------------------------------------------------------------------------------------------

    Examples on Regular Expressions:
        -Example on mobile numbers:
            -some people may or not start their number with 002 
            -thne all numbers start with 01
            -then:
                -0 for vodafone  OR
                -1 for Etisalat OR
                -2 for orange   OR
                -5 for we
            -then 8 numbers
            
            var x = /^(002)?01[0125][0-9]{8}$/

            -0114432345 ==>match
            -0020114432345 ==>match
            -0020020114432345 ==> not match
        
        Example:
            -we want to enter age from 10 to 80
            -then (10 to 79) or 80

            var x = /^([1-7][0-9]|80)$/

        Example:
            -we want user to enter price from 10 to 80 then dollar sign($)

            var x = /^([1-7][0-9]|80)\$$/

            -75$ ==>match

        Example:
            -we want to write web then any number of characters then web
            
            var x = /^web.{5}web$/

            -web@web ==>not match
            -web45@sdweb ==>match
        Example:
            -we want to enter price from 100 to 1000
            
            var x = /^([1-9][0-9][0-9]|1000)$/
            
            -when we have ranges, its digits number vary (100) , 1000
            -same range of same number of digits (100)-> (999)
            -then make 1000 seperately

            

-->