<?php

/**
 * Class for integers
 */
class Numbers
{
    /**
     * List of numbers
     *
     * @var array
     */
    private $numbers;

    /**
     * Create a empty numbers object
     */
    public function __construct()
    {
        $this->clear();
    }

    public function clear()
    {
        $this->numbers = [];
    }

    public function add(int $number)
    {
        $this->numbers[] = $number;
    }

    /**
     * Check if number exists in set of numbers
     *
     * @param integer $number what you search
     * @return boolean true if number is in
     */
    public function exists(int $number): bool
    {
        foreach ($this->numbers as $value) {
            if ($value == $number) {
                return true;
            }
        }
        return false;
    }

    public function get(): string
    {
        return implode(" ", $this->numbers);
    }
}
