<?php declare(strict_types = 1);

    /* 
     *  Function    : containsWord()
     * 
     *  Description : Checks whether a sentence contains a specific word, case insensitive.
     *  
     *  Parameters  : (string) word         - The word to find
     *                (string) sentence     - The sentence to search
     * 
     *  Return      : boolean
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */
    
    
    function containsWord(string $word, string $sentence): bool
    {
        $pattern = "/\b(".$word.")\b/i";

        $match = preg_match($pattern, $sentence);

        return (bool)$match;
    }
