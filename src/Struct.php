<?php
class Struct
{
    public function __construct($properties)
    {
        foreach ($properties as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
    public function __get($key)
    {
        return $this->{$key};
    }
    public function __call($key, $args)
    {
        $struct = clone $this;
        $struct->{$key} = $args[0];
        return $struct;
    }
}
