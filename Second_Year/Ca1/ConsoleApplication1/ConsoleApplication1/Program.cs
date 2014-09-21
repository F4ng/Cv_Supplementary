using System;
using System.Speech;
using System.Speech.Synthesis;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;


/*
Title: DT228/ OOP CA - Dani
Semester I 2013/2014
    
  
Student: C12733411
Name: Tomas Higgins
Group: B
Date: 03/12/2013

*/

namespace ConsoleApplication1
{
    class Program
    {
        static List<Word> wordList = new List<Word>();
        static List<string> daniResponse = new List<string>();
        static int index = 0;
        static int positionIndex = 0;
        static int lives = 0;
        static bool speechSyn = false;

        public static void Main(string[] args)
        {
            string inputSentence = "start";
            string caseSwitch = "start";
            string sentenceToMatch = "start";
            Console.WriteLine("Hello, Dani here. ");

            while (caseSwitch != "quit")
            {
                inputSentence = "start";
                Console.WriteLine("\nPlease enter what you wish to do:");
                Console.WriteLine("'talk', 'game1','game2','speech','quit'\n");
                
                caseSwitch = Console.ReadLine().ToLower();

                switch (caseSwitch)
                {
                    case "1":
                    case "talk":

                        Console.WriteLine("\nEnter who you wish to talk to");
                        Console.WriteLine("'dani' 'barack obama' 'chuck norris'\n");
                        caseSwitch = Console.ReadLine().ToLower();

                        switch (caseSwitch)
                        {
                            case "1":                                                                                                  // This case "dani" talks like the basic dani bot, using the user input, choosing a word at random and sending back an output based on that word.
                            case "dani":

                                Console.WriteLine("\nOkay then, tell me about your day, or type 'back' to go to the menu");
                                while (inputSentence != "back")
                                {
                                    inputSentence = Console.ReadLine().ToLower();
                                    AddWords(inputSentence);
                                    DaniResponse(inputSentence);
                                }
                                break;
                            case "2":                                                                                                   //This case used a file with speech text from barack obama, trying to give the impression you are talking to him.
                            case "barack obama":
                                LoadFile("barackObama.txt");
                                Console.WriteLine("\nHow would you like the world to change ?");
                                while (inputSentence != "back")
                                {
                                    
                                    inputSentence = Console.ReadLine().ToLower();
                                    AddWords(inputSentence);
                                    DaniResponse(inputSentence);
                                }
                                break;

                            case "3":                                                                                                   //This out file has a list of chuck norris facts, you can talk to him as normal or type chuck to get some intresting facts.
                            case "chuck norris":
                                LoadFile("chuckNorris.txt");
                                Console.WriteLine("\ntype 'chuck' if you want to learn some facts about me");
                                while (inputSentence != "back")
                                {
                                    inputSentence = Console.ReadLine().ToLower();
                                    AddWords(inputSentence);
                                    DaniResponse(inputSentence);
                                }
                                break;
                            default:
                                Console.WriteLine("Try again");
                                break;
                        }
                        break;
                    case "2":                                                                                                             //Game one is a puzzle, and its based on the files you have read in, you have to try say a line that then dani replys the same thing.
                    case "game1":
                        lives = 1;

                        Console.WriteLine("\nWelcome to game1");
                        Console.WriteLine("What can you input that i will always return the same word");
                        Console.WriteLine("goodluck!");
                        Console.WriteLine("Or type 'back' to go to the menu");

                         while (inputSentence != "back")
                        {
                            inputSentence = Console.ReadLine().ToLower();
                            AddWords(inputSentence);
                            DaniResponse(inputSentence);
                            inputSentence = PlayGame(inputSentence);     
                        }
                        break;
                    case "3":                                                                                                              //Game two is also based on Dani's output, the idea of this is to try get dani to say a certain preset sentence.
                    case "game2":

                        string check = "start";
                        lives = 5;
                        LoadFile("Game2.txt");
                        sentenceToMatch = ChooseSentence(sentenceToMatch);
                        Console.WriteLine("\nWelcome to game2\nTrick me into saying: " + "'" + sentenceToMatch + "'" + "\nGoodluck!");
                        Console.WriteLine("Or type 'back' to go to the menu");
                        while (inputSentence != "back" && check != "back")
                        {
                            inputSentence = Console.ReadLine().ToLower();
                            AddWords(inputSentence);
                            DaniResponse(inputSentence);
                            check = PlayGame(sentenceToMatch);
                        }
                        break;
                    case "4":
                    case "speech":                                                                                                              //This is a toggle for text to speech.

                        if (speechSyn == true)
                        {
                            Console.WriteLine("\nText to speach has been toggled off\n");
                            speechSyn = false;
                        }
                        else
                        {
                            Console.WriteLine("\nText to speach has been toggled on\n");
                            speechSyn = true;
                        }
                        
                        break;
                    case "5":
                    case "quit":
                        Console.WriteLine("Goodbye, thank you for the chat.");
                        break;
                    default:
                        Console.WriteLine("Its not that hard, try again");
                        break;
                }
            }
        }

        static void AddWords(string inputSentence)                                                                                               // This function adds words into memory, these words are parsed into the word last list
        {
            int wordFind = 0;
            bool found = false;
            int checkNew = 0;
            string[] inputWords = inputSentence.ToLower().Split(' ');
            for (int j = 0; j < inputWords.Length; j++)
            {
                for (int i = 0; i < wordList.Count; i++)
                {
                    if (inputWords[j] == wordList[i].storedWord)
                    {
                        wordFind = i;
                        found = true;
                        break;
                    }
                }

                if (found == false)
                {
                    wordList.Add(new Word(inputWords[j], index));
                    index++;
                    checkNew++;
                }
                else if (found == true)
                {
                    wordList[wordFind].storedIndex.Add(index);
                    wordList.Add(new Word(inputWords[j], index));

                    index++;
                }

                found = false;
            }

            
                wordList.Add(new Word("*", index));
                index++;
        }

        static void DaniResponse(string inputSentence)                                                                                                     //This function randomly chooses what words should be in the reponse, it chooses words from memory and prints them to the console based apon the input.
        {
            daniResponse.Clear(); 
            string[] inputWords = inputSentence.Split(' ');           
            int inputSize = inputWords.Length;
            SpeechSynthesizer reader = new SpeechSynthesizer();
            Random rnd = new Random();
            int startWord = rnd.Next(inputSize);
            bool found = false;
            int i = 0;
            
            while(found == false)
            {
                int w = wordList[i].storedIndex.Count;
                
                if (inputWords[startWord] == wordList[i].storedWord)
                {
                    if (w != 1)
                    {
                        w = rnd.Next(w);
                        positionIndex = wordList[i].storedIndex[w];
                    }
                    else
                    {
                        positionIndex = i;
                    }
                    
                    found = true;
                }
                i++;   
            }

            while (wordList[positionIndex].storedWord != "*")
            {
                daniResponse.Add(wordList[positionIndex].storedWord);
                positionIndex = positionIndex + 1;
            }

            if (speechSyn == true) 
            {
                foreach (string w in daniResponse)
                {
                    Console.Write(w + " ");
                }

                foreach (string w in daniResponse)
                {
                    reader.Speak(w );
                }


            }
            else
            {
                foreach (string w in daniResponse)
                {
                    Console.Write(w + " ");
                }

            }
         
           
            Console.WriteLine();
        }

        static string PlayGame(string sentenceToMatch)                                                                                      //Checks the string passed to it with dani's response to check if they match, prints if the user has won or lost or just deducts lives.
        {
            string daniSentence = string.Join(" ", daniResponse.ToArray());

            if (daniSentence == sentenceToMatch)
            {
                Console.WriteLine("\nWell done you have won");
                return "back";
            }
            else if (lives < 1)
            {
                Console.WriteLine("\nSorry you have lost");
                return "back";
            }
            else
            {
                lives = lives - 1;
                return "\ntry again";
            }
        }

         static string ChooseSentence(string sentenceToMatch)                                                                                   //Randomly chooses which sentence dani has to match for game2
         {
             Random rnd = new Random();
             int caseSwitch = rnd.Next(10);
             switch (caseSwitch)
             {
                 case 1:
                     sentenceToMatch = "are you doing?";
                     break;
                 case 2:
                     sentenceToMatch = "job application";
                     break;
                 case 3:
                     sentenceToMatch = "have a job lined up";
                     break;
                 case 4:
                     sentenceToMatch = "day going";
                     break;
                case 5:
                     sentenceToMatch = "stressed out now";
                     break;
                case 6:
                     sentenceToMatch = "understatement";
                     break;
                case 7:
                     sentenceToMatch = "friends at a pool hall";
                     break;
                case 8:
                     sentenceToMatch = "you having fun";
                     break;
                case 9:
                     sentenceToMatch = "work i have to do";
                     break;
                case 10:
                     sentenceToMatch = "in your shoes";
                     break;
             }
             return sentenceToMatch;
         }

         static void LoadFile(string file)                                                                                                  //Loads a file that is passed into it, and passes each line into the addWord fuction
         {
             using (StreamReader r = new StreamReader(file))
             {
                 string line;
                 while ((line = r.ReadLine()) != null)
                 {
                     AddWords(line);
                 }
             }
         }
    }  
}



    





  