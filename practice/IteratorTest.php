<?php


namespace Practice ;

class IteratorTest implements \Iterator
{
    protected $list ;
    /**
     * @var int
     */
    protected $index;

    public function __construct()
    {
        for ($i = 0;$i < 10;$i++){
            for ($j = 0;$j < 10;$j++){
                $this->list[$i]=rand(1000,9999);
            }
        }
        echo "数组创建 \n";
    }

    public function current()
    {
        echo "当前数组 \n";
        return $this->list[$this->index] ."\n";
    }

    public function next()
    {
        $this->index++;
        echo "下一个 {$this->index} \n";
    }

    public function key()
    {
        echo "key \n";
        return $this->index;
    }

    public function valid()
    {
        echo "valid \n";
        return $this->index < count($this->list);
    }

    public function rewind()
    {
        echo "rewind \n";
        $this->index = 0;
    }
}



