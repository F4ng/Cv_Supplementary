void playGame(){
 
 
 if(on){

 background(100); 
 showScore();
 myword = colorNames[int(random(2))];
 
 colourPicked =   int(random(2.99));
 color mycolor = palette[colourPicked];
    
     fill(mycolor);
     text(myword, startButtonX, startButtonY + 10); 
     
     
      
    
     println(counter);
  
 }

 
 on = false;
 
  
}
