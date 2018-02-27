//****************************//
//*****DO NOT TOUCH THESE*****//
//****************************//
import java.util.*;
import java.io.*;

public class RPG{
  
  //variable to hold user inputs
  public static int action;
  
  //Default hero stats (this can be changed)
  public static String name = null; //hero's name
  public static int strength = 5;   //hero's strength
  public static int intel = 10;     //here's intelligence
  public static int hitPoints;      // hero's health (life points/hp)
  public static int magicPoints;    //hero's magic points (mp)
  public static int level = 1;      //hero's level
  public static int exp = 0;        //experience points gained
  public static int levelexp = 100; //experience points need to go to next level
  
  //default first monster stats
  public static String MonsterName = "PopUpAd";                 //monster's name
  public static int MonsterStrength = 5;                        //monster's strength
  public static int MonsterIntel = 5;                           //monster's intelligence
  public static int MonsterHitPoints = (MonsterStrength * 2);   //monster's health (life points/hp)
  public static int MonsterExp = 5;                             //experience given to hero after battle
  
  //the main method
  public static void main(String[] args) throws IOException{
    
    BufferedReader br = new BufferedReader(new InputStreamReader(System.in)); 
    
    //introduction
    System.out.println("Welcome, brave warrior! This computer needs your help!  There are potential virus threats lurking everywhere inside!");
    System.out.println("You are the chosen one, so please save the Computer Realm from these threats, and defeat the evil Trojan Horse Virus Boss!");
    
    //this part allows the user to enter a name only, but it can be changed to allow the user to enter stats for strength and intel as well
    System.out.println("Please choose your hero's stats, remember this will affect you later on in the game!");
    System.out.println("\nEnter hero name");
    name = (br.readLine());
    
    System.out.println("\nYour hero stats are as follows:\n");
    System.out.println("Name : " + name);
    System.out.println("Strength " + strength);  //strength (counted as attack power and hitpoint value)
    System.out.println("Intelligence " + intel); //intelligence (counted as magic power and magic point value)
    
    hitPoints = strength * 2;
    magicPoints = intel * 2;
    
    System.out.println("\nNow prepare for your journey!");
    System.out.println("\n........................................................");
    System.out.println("\n!!You encounter a " + MonsterName + "!!");
    System.out.println("Prepare for battle!");
    
    FightMonster();
    
    //TASK 1: write a loop to allow the user to continuously choose monsters to fight
    //this loop should last until the hero has died, or the final boss has been defeated
    
    //TASK 2: allow the user to choose any of the 3 monsters to fight
    //each monster should have different stats
    System.out.println("\nWhich Monster would you like to fight next?");
    System.out.println(" 1 - PopUpAd \n 2 - Small Virus \n 3 - Trojan Horse Virus Boss");
    
    action = Integer.parseInt(br.readLine());
    
    if (action == 1){
      MonsterName = "PopUpAd";
      MonsterStrength = 5;
      MonsterIntel = 5;
      MonsterHitPoints = (MonsterStrength * 2);
      MonsterExp = 5;
      FightMonster();
    }
  }
  
  /**************** DO NOT CHANGE ANY OF THE EXISTING METHODS/FUNCTIONS ***************
    * ************* YOU CAN HOWEVER MAKE YOUR OWN METHONDS/FUNCTIONS ******************/
  
  //the FightMonster method
  //TASK 3: display the action chosen by the user, and write the conditions and what happens when the user chooses the various actions on the menu
  //the user can either attack, defend, heal, or run away
  //for healing, please make sure the user has enough magic points before allowing them to heal
  public static void FightMonster() throws IOException {
    
    BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
    //battle menu - do not change these options!
    String menu = "What are you going to do, " + name + "?\n 1 - attack \n 2 - defend \n 3 - heal \n 4 - run away ";
    
    //this loop allows the user to continue the battle until either the monster or the user has died
    //note that the loop dummy variables "i", meaning the i variable doesn't do anything
    for (int i = 0; MonsterHitPoints > 0 && hitPoints > 0; i ++){
      
      System.out.println(menu);
      action = Integer.parseInt(br.readLine());
      
    }
  }
  
  //the MonsterAction method
  //used in the FightMonster method
  //generates a random action from the monster in response to player action
  public static void MonsterAction(){

    // ********* DO NOT TOUCH ************//
    Random die = new Random();
    int com = die.nextInt(2) + 1;
    // ***********************************//
    
    //TASK 4: display the hit points of the hero and monster after each round of battle
    if (com == 1){
      System.out.println(MonsterName + " attacks " + name);
      hitPoints = hitPoints - MonsterStrength;  
    }
    else{
      System.out.println(MonsterName + "is defending.");
    }
  }
  
  //COMPLETE THE REMAINING TASKS (5-6)
}