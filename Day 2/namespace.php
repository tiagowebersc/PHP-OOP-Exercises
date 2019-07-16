<?php
/* Namespaces allows to compartmentalize the classes of a project.
You can see a namespace like a folder
*/

namespace MyProject\Tools;

class MyClass
{
    public function doStuff()
    {
        echo "MyClass tools doing some stuff<br>";
    }
}

namespace MyProject\Utilities;

class MyClass
{
    public function doStuff()
    {
        echo "MyClass utility doing some stuff<br>";
    }
}
