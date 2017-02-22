<?php

namespace App\Core;
/**
 * Get the path to a versioned Elixir file.
 *
 * param  string  $file
 * return string
 *
 * throws \InvalidArgumentException
 */




class Jadu{
    
    public static function jadu_controller($controller,$methods=[])
    {
        $contrfile = fopen("app/controllers/$controller"."Controller.php", "w");
        $default[] = "<?php\nnamespace App\Controller;\nclass {$controller}Controller\n{\n";
        
        if(!empty($methods))
        {
        foreach($methods[0] as $method)
        {
            $default[] = "\n\tpublic function ";
            $default[] = "{$method}()\n\t{\n\t\t//return view('{$method}');\n\t}\t\n";
             
        }
}

        $default[] = "\n}\n?>";
        fwrite($contrfile,implode($default));
        fclose($contrfile);
    }

public static function elixir($file)
{
    static $manifest = null;
 
    if (is_null($manifest)) {
        $manifest = json_decode(file_get_contents('../public/rev-manifest.json'), true);
    }
 
    if (isset($manifest[$file])) {
        return '/'.$manifest[$file];
    }
 
    throw new InvalidArgumentException("File {$file} not defined in asset manifest.");
}

    
}