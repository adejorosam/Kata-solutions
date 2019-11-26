/*You're going on a trip with some students and 
it's up to you to keep track of how much money each student has. 
Each student has some fives, tens, and twenties. 
Your job is to return the name of the student with the most money. 
If every student has the same amount, then return "all". */

function expense_track($stud_money){
  $highest = 0;
  $stud_money = [2000=>"Tolu", 500=>"Samson",1000=>"Olawale"];
  foreach($stud_money as $money=>$name){
      if($money > $highest){
         $highest = $money;
              echo "{$stud_money[$highest]} with #{$highest} has the highest amount of money.";
              break;
       }
      
    }
 }

expense_track($stud_money);
