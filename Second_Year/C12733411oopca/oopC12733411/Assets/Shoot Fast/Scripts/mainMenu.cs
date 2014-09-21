using UnityEngine;
using System.Collections;

public class mainMenu : MonoBehaviour 
{
	private delegate void MenuDelegate();

	private MenuDelegate menuFunction;

	private float screenHeight;
	private float screenWidth;
	private float buttonHeight;
	private float buttonWidth;
	private float buttonHeight1;
	private float buttonWidth1;
	static public int difficulty;


	void Start ()
	{
		screenHeight = Screen.height;
		screenWidth = Screen.width;
		
		buttonHeight = screenHeight * 0.3f;
		buttonHeight1 = screenHeight * 0.15f;
		buttonWidth = screenWidth * 0.4f;
		buttonWidth1 = screenWidth * 0.2f;

		menuFunction = difficultyMenu;
	}
	
	void OnGUI()
	{
	
		menuFunction();
	}

	void difficultyMenu()
	{

		if(GUI.Button(new Rect((screenWidth - buttonWidth1) * 0.2f, screenHeight * 0.4f, buttonWidth1, buttonHeight1), "Easy"))
		{
			difficulty = 1;
			//Debug.LogError("ERROR: difficulty set to 1");
			menuFunction = realMenu;

		}
		if(GUI.Button(new Rect((screenWidth - buttonWidth1) * 0.5f, screenHeight* 0.4f, buttonWidth1, buttonHeight1), "Medium"))
		{
			difficulty = 2;
			menuFunction = realMenu;
		}
		if(GUI.Button(new Rect((screenWidth - buttonWidth1) * 0.8f, screenHeight * 0.4f, buttonWidth1, buttonHeight1), "Hard"))
		{
			difficulty = 3;
			menuFunction = realMenu;
		}
		


	}

	void realMenu()
	{
		if(GUI.Button(new Rect((screenWidth - buttonWidth) * 0.5f, screenHeight * 0.1f, buttonWidth, buttonHeight), "Start Game"))
		{
			Application.LoadLevel("Duck Shoot");
		}
		if(GUI.Button(new Rect((screenWidth - buttonWidth) * 0.5f, screenHeight * 0.5f, buttonWidth, buttonHeight), "Difficulty Settings"))
		{
			Application.LoadLevel("mainMenu");
		}

	}
}