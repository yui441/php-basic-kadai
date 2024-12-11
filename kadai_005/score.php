<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_005</title>
 </head>
 
 <body>
    
     <p>
         <?php

         //10人のscoreを代入
         $score1 = 80;
         $score2 = 60;
         $socre3 = 55;
         $score4 = 40;
         $score5 = 100;
         $score6 = 25;
         $score7 = 80;
         $score8 = 95;
         $score9 = 30;
         $score10 = 60;

         //合計
         $total_score = $score1 + $score2 + $socre3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

         //echo $total_score;

         //平均
         $score_average = $total_score / 10;

         echo $score_average;


         ?>
     </p>
 </body>
 
 </html>
