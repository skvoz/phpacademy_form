<?php
interface IVideo {
    function display();
}

interface ITorrents {
    function display();
}
class Video implements IVideo {
    public function display()
    {
        echo 'vidosik';
    }
}

class Tizer implements IVideo , Torrents{

    function display()
    {
        echo 'tizer';
    }
}

class Storymaze implements IVideo{
    public function display()
    {
        echo 'storymaze';
    }
}
