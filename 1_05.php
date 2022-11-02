<?php

/*$board = [
    ['-','-','-'],
    ['-','-','-'],
    ['-','-','-']
];
echo implode($board[0]). " \n". implode($board[1]). " \n". implode($board[2]). " \n";*/

function display_board()
{
    echo "  1 |  2 |  3 \n";
    echo "---+---+---\n";
    echo "  4 |  5 |  6 \n";
    echo "---+---+---\n";
    echo "  7 |  8 |  9 \n";
}


display_board();