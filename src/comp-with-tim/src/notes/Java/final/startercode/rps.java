//****************************//
//*****DO NOT TOUCH THESE*****//
//****************************//
import java.io.*;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.util.*;

public class rps {
    
  private static int win = 0;   //variable to count the wins
  private static int lose = 0;  //variable to count the losses
  
  //the main method
  public static void main(String[] args) throws IOException {
    
    BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
    
    //introduction
    System.out.println("Welcome to the Rock, Paper, Scissors Tournament!");
    System.out.println("Please enter \"rock\", \"paper\", or \"scissors\".");
    System.out.println("You may enter \"end\" at any time to end the game.");
    String nextLine;
    nextLine = br.readLine();
    
    //TASK 1: Limit the game so that it runs for 15 rounds only
    while (!nextLine.equals("end")){
      //method runs the user input
      hand(nextLine);
      nextLine = br.readLine();
    }    
  }
  
  //the hand method
  //method that will read the user input
  //TASK 2: Output what move the user has played
  public static void hand(String RPS){
    
    //Remeber RPS.equals("rock") is a predefined method, so it will read the user input
    if(RPS.equals("rock")){
      play(1);
    }
    else if (RPS.equals("paper")){
      play(2);
    }
    else if (RPS.equals("scissor")){
      play(3);
    }
  }
  
  //the play method
  //method for calculating the computer move
  public static void play(int roll){
    
    //*** DO NOT MODIFY THIS CODE ***//
    //*******************************//
    Random die = new Random();
    int com = die.nextInt(3) + 1;
    //*** YOU MAY MODIFY CODE AFTER THIS ***//
    //**************************************//
    
    //TASK 3: Output what move the computer has played
    
    //TASK 4: Write the conditions on how the player wins, loses, or ties
    //TASK 5: Output a message telling the user if they won, lost, or tied
    if (com == 1 && roll == 1 || com == 2 && roll == 2){
      System.out.println("You tied");
    }
  }    
  
  //COMPLETE THE REMAINING TASKS (6-8)
  
}



