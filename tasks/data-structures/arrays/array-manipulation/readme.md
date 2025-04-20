Starting with a 1-indexed array of zeros and a list of operations, for each operation add a value to each array element between two given indices, inclusive. Once all operations have been performed, return the maximum value in the array.

Example


Queries are interpreted as follows:

    a b k
    1 5 3
    4 8 7
    6 9 1
Add the values of  between the indices  and  inclusive:

image

The largest value is  after all operations are performed.

Function Description

Complete the function  with the following parameters:

: the number of elements in the array
: a two dimensional array of queries where each  contains three integers, , , and .
Returns

: the maximum value in the resultant array
Input Format

The first line contains two space-separated integers  and , the size of the array and the number of queries.
Each of the next  lines contains three space-separated integers ,  and , the left index, right index and number to add.

Constraints

Sample Input

STDIN       Function
-----       --------
5 3         arr[] size n = 5, queries[] size q = 3
1 2 100     queries = [[1, 2, 100], [2, 5, 100], [3, 4, 100]]
2 5 100
3 4 100
Sample Output

200
Explanation

After the first update the list is 100 100 0 0 0.
After the second update list is 100 200 100 100 100.
After the third update list is 100 200 200 200 100.

The maximum value is .
