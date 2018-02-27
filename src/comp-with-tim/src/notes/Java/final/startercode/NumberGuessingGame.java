//****************************//
//*****DO NOT TOUCH THESE*****//
//****************************//
import java.util.*;
import java.io.*;

public class NumberGuessingGame{
    
  public static int num;    //variable to hold randomly generated number
  public static int guess;  //variable to hold user inputs
  public static String ans; //variable to hold user input for y/n
  
  //the main method
  public static void main(String[] args) throws IOException{
    
    BufferedReader br = new BufferedReader(new InputStreamReader(System.in)); 
    
    //introduction
    System.out.println("Welcome to the Number Guessing Game!");
    
    //loop to allow the user to play again
    ans = "y";
    while(ans.equals("y")){
      numberGenerator();
      System.out.println("\nI have generated a random number between 1 and 100.  Please guess what the number is.");
      
      //TASK 1: limit the user to only 7 guesses
      guess = Integer.parseInt(br.readLine());
      
      //TASK 2 & 3: write in the conditions for when the user's guess is too high, too low, or correct
      //if the guess is correct, the user should not be able to keep guessing
      if(guess >= 0 && guess <=100 && guess > num){
        System.out.println("Your guess is...");
      }
      
      //TASK 4: if the user has used up the 7 guesses, let the user know that they have run out of guesses
      //they should then have the option of playing again
      
      System.out.println("Play again? (y/n)");
      ans = br.readLine();
      
      if(ans.equals("n")){
        System.out.println("Thank you for playing!");
        break;
      }
      else if(ans.equals("y")){
      }
      else{
        System.out.println("Please enter y/n");
      }
     }
    
    //COMPLETE THE REMAINING TASKS (5-8)
  }
  
  //the numberGenerator method
  //this method generates the random number
  public static void numberGenerator(){
    
    // ********* DO NOT TOUCH ************//
    Random generator = new Random();
    num = generator.nextInt(100) + 1;
    // ***********************************//
    
  }
}