# PHP Interview Crosswords

Lets make a crossword!

### Task 1

Given rectangular matrix, filled with letters.
Given comma separated list of words. Words can only contain letters, so any other symbols should not be found in our cases.
Somewhere in this matrix you can find some words from given list.

Words in the grid can be arranged in four directions - up, down, left or right. Words cannot change direction.

For example, for given matrix

R A T A
A I A N
D I O N
S Z X A
and given words "RAT, CAT, DAR, RADIO, RIO" only words RAT and DAR can be found: CAT requires letter "C" which just missing, 
RADIO requires direction change which is forbidden and RIO requires diagonal movement which is prohibited.

You need to print source matrix, containing only founded words with underscore character in all unused places.
Given example leads to 

R A T _
A _ _ _
D _ _ _
_ _ _ _

Of course, one letter can be used twice or even more!

### Task 2

Given rectangular matrix, filled with letters.
Given comma separated list of words. Words can only contain letters, so any other symbols should not be found in our cases.
Somewhere in this matrix you can find a whole crossword!

There are some changes in rules:
Now words can be arranged only in two directions - down and right. As usual, words cannot change direction.
Now we should find only words, which connected with at least one another word.
"Connected" means that words should have one shared letter (in one place, ofc) and the words must be perpendicular.
You need to print source matrix, containing only founded crossword with underscore character in all unused places.

Lets look at new example:

R A T A
A I A N
D I O N
I Z X A
O M G D

List of words is "RAT, CAT, DAR, RADIO, RIO, ANNA"
Now you still cant use CAT and RIO, but also you cant use DAR, because it arranged in wrong direction
Instead you can use vertically arranged RADIO. Added word "ANNA" cant be used for crossword, because it is not connected to other words with given rules.

Finally, expected output is:

R A T _
A _ _ _
D _ _ _
I _ _ _
O _ _ _
