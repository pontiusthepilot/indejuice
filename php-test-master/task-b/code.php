<?php declare(strict_types = 1);

    /* 
     *  Function    : generateSentence()
     * 
     *  Description : Generate a sentence listing out all items provided in an array.
     *  
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     * 
     *  Return      : string
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */

    
    function generateSentence(string $start, array $items, $append = null): string
    {
        $sentence = '';

        $conjunction = ' and ';

        $itemCount = count($items);

        $appendedTypes = array();


        for ($i = 0; $i < $itemCount; $i++) {
            if ($append === null) {
                $appendedTypes[$i] = '';
            } else {
                $appendedTypes[$i] = ' ';
            }

            if (gettype($append) == 'array') {
                $appendedTypes[$i] .= $append[$i];
            } else {
                $appendedTypes[$i] .= $append;
            }
        }

        $itemCount = count($items);
        
        while ($itemCount > 0) {

            $itemCount--;

            $sentence = $conjunction . $items[$itemCount] . $appendedTypes[$itemCount] . $sentence;

           if  ($conjunction == ' and ') {
                $conjunction = ', ';
           } else if ($itemCount <= 1) {
                $conjunction = '';
           }
        }

        return $start .': ' . $sentence . ".";

    }