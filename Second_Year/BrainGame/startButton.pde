void startButton(){
  if(gameStage != 1 ){
  if((mouseX > startButtonX-startButtonW/2 && mouseX < startButtonX+startButtonW/2)   
      &&                                                        
     (mouseY > startButtonY-startButtonH/2 && mouseY < startButtonY+startButtonH/2)){ 
       
        // start
        
        println("OK");
        gameStage = 1;
        
     }
  }
}
