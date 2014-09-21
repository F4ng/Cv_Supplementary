using UnityEngine;
using System.Collections;

public class gameManager : MonoBehaviour {

    public static gameManager GC;

    private ArrayList duckList;
	private ArrayList grenadeList;
    private float moveSpeed = 1.5f;
	static private int spawnedDuck = 0;
	static private int spawnedGrenade = 0;
	static private int duckScore;
	static private int grenadeScore;
	public GameObject Explosion;
	public GameObject Explosion2;
	static public int gameScore;
	static public int difficultyScore;
	private int difficultyLength = 50;
	private int difficultyLevel = mainMenu.difficulty;
	private bool end = true;


	void Awake () {
        GC = this;

		duckList = new ArrayList();
		grenadeList = new ArrayList();
		difficultySet();
        
	}

    void Update()
    {
        //Move objects
        for (int i = duckList.Count - 1; i >= 0; i--)
        {
            float edgeLeft = -10;
			float edgeRight = 10;

            movingDuck movDuck = (movingDuck)duckList[i];
            Transform trans = movDuck.duckTransform;
            trans.Translate((int)movDuck.duckDirection * Time.deltaTime * moveSpeed, 0, 0);
            if (trans.position.x < edgeLeft || trans.position.x > edgeRight)
            {
                Destroy(trans.gameObject);
                duckList.Remove(movDuck);
            }
        }


		for (int i = grenadeList.Count - 1; i >= 0; i--)
		{
			float bottom = -10;
			
			movingGrenade movGrenade = (movingGrenade)grenadeList[i];
			Transform trans = movGrenade.grenadeTransform;
			trans.Translate((int)movGrenade.grenadeDirection * Time.deltaTime * moveSpeed, 0, 0);
			if (trans.position.y < bottom)
			{
				Destroy(trans.gameObject);
				grenadeList.Remove(movGrenade);
			}
		}


		if ((duckScore == difficultyLength) && (end == false)) 
		{
			end = true;
			calcScore();
			highScore();
			Debug.LogError("ERROR: Missing Object");
			Application.LoadLevel("victory");


		}

	}
	
	void OnGUI(){
		if(GUILayout.Button("Restart"))
		{
			duckScore =0;
			spawnedDuck =0;
			spawnedGrenade=0;
			gameScore =0;
			grenadeScore=0;

			Application.LoadLevel("Duck Shoot");
        }
		GUILayout.Label(" Ducks Hit: " + duckScore + "/" + spawnedDuck);
		GUILayout.Label(" Grenades Hit: " + grenadeScore + "/" + spawnedGrenade);
		GUILayout.Label(" Score: " + gameScore);
		GUILayout.Label(" High Score: " + PlayerPrefs.GetInt("highScore"));
    }

    public void AddTarget(movingDuck newObj){
        spawnedDuck++;
        duckList.Add(newObj);
    }

    public bool removeDuck(Transform trans)
    {
        

        foreach (movingDuck obj in duckList)
        {
            if (obj.duckTransform == trans)
            {
				Instantiate(Explosion,obj.duckTransform.position,obj.duckTransform.rotation);
                duckScore++;
				gameScore = gameScore + 40;
                duckList.Remove(obj);
                Destroy(obj.duckTransform.gameObject); 
				end = false;
                return true; 
            }
        }
		//Debug.LogError("ERROR: Missing Object");
        return false;
    }

	public void addGrenade(movingGrenade newGrenade){
		spawnedGrenade++;
		grenadeList.Add(newGrenade);
	}
	
	
	
	
	
	public bool removeGrenade(Transform trans)
	{
		
		
		foreach (movingGrenade obj in grenadeList)
		{
			if (obj.grenadeTransform == trans)
			{
				Instantiate(Explosion2,obj.grenadeTransform.position,obj.grenadeTransform.rotation);
				grenadeScore++;
				gameScore = gameScore + 100;
				grenadeList.Remove(obj);
				Destroy(obj.grenadeTransform.gameObject); 
				return true; 
			}
		}
		//Debug.LogError("ERROR: Missing Object");
		return false;
	}





	public void calcScore()
	{
		int tempDuck = spawnedDuck-duckScore;
		int tempGrenade = spawnedGrenade-grenadeScore;

		gameScore = gameScore / (tempDuck + tempGrenade) + difficultyScore;

	}

	public void difficultySet()
	{
		if (difficultyLevel == 1) 
		{
			difficultyScore = 1000;
			difficultyLength = 40;
		} 
		else if (difficultyLevel == 2) 
		{
			difficultyScore = 2500;	
			difficultyLength = 80;
		}
		else if (difficultyLevel == 3) 
		{
			difficultyScore = 5000;
			difficultyLength = 150;
		} 
		else if (difficultyLevel == 0) 
		{
			Debug.LogError("ERROR: Menu Issue");
		}
		else
		{
			Debug.LogError("ERROR: difficulty not set");
		}
	
	}

	public void highScore()
	{
		if(gameScore > PlayerPrefs.GetInt("highScore"))
		{
			PlayerPrefs.SetInt("highScore",gameScore);
		}
		
	}



}
