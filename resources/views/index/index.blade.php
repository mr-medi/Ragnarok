ITEMS:
@inject('i','App\Item')
@inject('m','App\Mob')
@inject('a','App\SkillsMob')
@foreach ($i::all() as $item)

@endforeach

@php
    ini_set('memory_limit', '6400M');
    /*$attributes = $i::all()[0]->getAttributes();
    foreach($attributes as $id=>$a)
    {
        echo "'".$id."' => $"."resource->".$id.",<br>";
    }*/
    $attributes = $m::all();
    echo $m::all()[0]->skills('1001');
    echo "<pre>";
    var_dump($m::all()[0]->skills('1001'));
    /*foreach($m::all() as $a)
    {
        //echo $a->ID."<br>";
        /*foreach ($a->skills($a->ID) as $s)
        {
            echo $s."<br>";
        }
        //print_r($a->skills($a->ID))."<br>";

    }*/
@endphp
