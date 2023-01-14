/*
Proposed Scenario:
You are a developer at a digital marketing company. Each potential customer registered through the web site is directed to a specific sales person,
following a simple distribution queue.
Each salesperson who receives a potential customer takes the last place in the distribution queue. 
This ensures that, fairly, all salespeople have the opportunity to achieve sales of the product/service offered by the company.

Challenge

Based on the initial state of the distribution queue, which is given by the vector of IDs of the registered salespersons, 
you need to be able to establish its state after the registration of a number N of customers, 
showing who is the first salesperson in the queue and how many customers need to register for the salesperson of ID X to get to the front of the queue.

Example: for the initial queue state F=[3, 6, 8, 4, 7], after C=4 registered customers the resulting queue state will be R=[4, 7, 3, 6, 8], since:

After the first registered customer the queue will have the state [6, 8, 4, 7, 3]
After the second registration the queue will have the state [8, 4, 7, 3, 6].
After the third registration the resulting state will be [4, 7, 3, 6, 8].
Finally, after the third registration the resulting state will be [7, 3, 6, 8, 4]

For this resulting state we can then conclude that the salesperson occupying the first position in the queue is the one with ID 7.
We can also conclude that for the sales person with id 3 to reach the front of the queue, 1 more customer must be registered.

Input Format (all input lines are of type string):

The first line contains the number of items in the vendor queue V
The second line contains the space-separated ids of the salesmen in the initial queue state F
The third line contains the number of registered customers C
The fourth line contains the ID of one of the salespersons X


Output format:

You need to print two lines as the result

The first line should contain the ID of the salesperson who occupies the first position in the resulting queue state after the number C of registered customers.
The second line should contain the number of customers that need to register in order for salesperson X to get to the front of the queue.

Translated with www.DeepL.com/Translator (free version)
*/

// CODE SOLUTION

<?php

  $vendor_queue = explode(" ", trim(fgets(STDIN)));
  $initial_queue = explode(" ", trim(fgets(STDIN)));
  $customers_registered = trim(fgets(STDIN));
  $salesperson_id = trim(fgets(STDIN));
  $queue = $initial_queue;
  for ($i = 0; $i < $customers_registered; $i++) {
      array_push($queue, array_shift($queue));
  }
  echo $queue[0] . "\n";
  echo array_search($salesperson_id, $queue) . "\n";
