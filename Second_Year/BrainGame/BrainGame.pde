/* OpenProcessing Tweak of *@*http://www.openprocessing.org/sketch/57951*@* */
/* !do not delete the line above, required for linking your tweak if you upload again */
int gameStage = 0;  //stage of the gane
int score = 0;      //correct score
int counter = 0;    // current question
int totalquestion = 15;    //how many question to ask
boolean on = true;  //





int startButtonX=0;        //start button x
int startButtonY=0;        //start button y
int startButtonW=200;      //start button width
int startButtonH=100;      //start button height


String[] colorNames = new String[3];  //name of color -red, green blue-
String myword;  // current question`s color name


color[] palette=new color[3];  //color of word
int colourPicked;  // current question`s color



void setup() {
  frameRate(24); 
  size(500, 500);
  background(100); 
  
  startButtonX = width/2;
  startButtonY = height/2;
  
  colorNames[0] = "Blue";
  colorNames[1] = "Yellow";
  colorNames[2] = "Red";
  
  palette[0] = color(255,0,0);
  palette[1] = color(255,255,0);
  palette[2] = color(0,0,255);
  
  
  textSize(48);
  textAlign(CENTER);

  rectMode(CENTER);


}
void draw() {
  
  if (counter == totalquestion){ // if the current question is totalquestion then game is over
    gameStage = 2; // gameFinished
  }
          
  if(gameStage == 0){
    startMode();
  } else if (gameStage == 1){
    playGame();
  }else if (gameStage == 2){
    gameFinished();
  }
  
}

void mouseClicked(){
  startButton();
}
void keyPressed(){
  if(keyPressed) 
     {
       if(gameStage != 0){
     
        if (key == 'b' || key == 'y' || key == 'r') 
        {
        //  char userChoice = key;
          
          if (key == 'b' && colourPicked == 2) {
            score += 1;
          }
          if (key == 'y' && colourPicked == 1){
            score += 1;
          }
          if (key == 'r' && colourPicked == 0){
            score += 1;
          }
            
         
       counter += 1;
       
       on = true;
          
        }
      }
   }
}

