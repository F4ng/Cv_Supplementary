void showScore(){
  
  fill(255);
  textSize(20);
  
  text("Wrong answer: " + (counter - score), startButtonX, startButtonY-150); 
  text("Right answer: " + score, startButtonX, startButtonY-100); 
  
  text("'b' for blue, 'y' for yellow, 'r' for red ", startButtonX, startButtonY+200);
  textSize(44);
}
