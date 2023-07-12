<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<x-input type="text" name="t1" label="Name"/>
<x-input type="password" name="pass" label="pass"/>

<x-input type="radio" name="rad" label="radio"/>
</form>
</div>


</body>
</html>
///////////////////component//////////////////////////////////////

<div>
    <label for="Text">{{$label}}</label>
  <input type={{$type}} name={{$name}}>
</div>

//////////////component class////////////////////////////////////
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $label;
    public $name;
    public $type;



    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $name, $label)
    {
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
///////////////////////////////////////////////
