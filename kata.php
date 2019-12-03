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
