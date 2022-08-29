<!-- 
OOP:
    Intro:
        -OOP (object oriented programming)
        -OOP is not a programming language or library or framework
        -OOP is a technique for writing code in some languages 

        -C# , C++ , JS, PHP  are OOP languages(can apply oop on them)
        -C , scheme are not OOP languages

        -OOP is the simulation of reality(تمثيل للواقع)
        -OOP is turning reality into software

    OOP has 2 schools(can be done by 2 ways):
        -OOP class based 
        -OOP proto-type based   

    OOP(Class based) Intro:
        Example(pseudo code):
            class Doctor{
                id,
                name,
                salary,
                depart,
                isMarried
            }

            let amr = new Doctor("c344", "ahmed", 5000, 'general', true);//object
            let aya = new Doctor("c344", "aya", 5000, 'general', true);
            let ali = new Doctor("c344", "ali", 5000, 'general', true);

        -A JavaScript class is not an object.

        -It is a template/specification for JavaScript objects.
        -class does not have existance in real life
        -object has existance in real life

        -class itself does not allocate memory
        -object allocate memory
    
    OOP(Prototype based) Intro:
        -has no class
        -prototype(نموذج مبدأى)
        -make a prototype object ,and we  can produce more objects based on prototype object(object from prototype object)
        Example(pseudo code):
            -let amr = {
                name:"amr",
                department:"general"
            }//prototype object

            let sayed = new amr();//object from prototype object
            let zaki = new amr();
        
        -OOP prototype based is very easy in development and has higher performance than class based
        -but OOP clase based is very good at simulation of reality(better than prototype baseds)


        


--> 

