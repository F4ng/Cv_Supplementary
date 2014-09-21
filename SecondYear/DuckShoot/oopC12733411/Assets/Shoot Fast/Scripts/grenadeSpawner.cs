using UnityEngine;
using System.Collections;



public class movingGrenade{
    public grenadeDirectionEnum grenadeDirection; 
    public Transform grenadeTransform;

    public movingGrenade(grenadeDirectionEnum gDir, Transform gTrans)
    {
		grenadeDirection = gDir;
        grenadeTransform = gTrans;
    }
    
}

[System.Serializable]
public enum grenadeDirectionEnum{up = -1, down= 1}

public class grenadeSpawner : MonoBehaviour {

    public Transform grenadePrefab;
    public grenadeDirectionEnum spawnDirection = grenadeDirectionEnum.down;
    public static grenadeSpawner GS;

    private float farLeft;
    private float farRight;    
    private float lastSpawnTime;
    private float spawnInterval;   
	private int difficultyLevel = mainMenu.difficulty;

	void Awake () {
        GS = this;
        
        spawnInterval = Random.Range(10f, 12f);
        lastSpawnTime = Time.time + Random.Range(0.0f, 1.5f);
	}

    
	void Update () {
        //Spawn new object..
        if ((lastSpawnTime + spawnInterval) < Time.time)
        {
            SpawnObject();
        }      
	}

    void SpawnObject()
    {   

		if (difficultyLevel == 1) 
		{
			spawnInterval *= 0.99f;
		} 
		else if (difficultyLevel == 2) 
		{
			spawnInterval *= 0.97f;
		}
		else if (difficultyLevel == 3) 
		{
			spawnInterval *= 0.95f;
		} 
        lastSpawnTime = Time.time;

		//if (difficultyLevel == 1) {
			//Debug.LogError("ERROR: working");
				//}

        grenadeDirectionEnum direction = spawnDirection; //-1 or 1

        Transform newObj = (Transform)Instantiate(grenadePrefab, transform.position, transform.rotation);
        movingGrenade movObj = new movingGrenade(direction, newObj);        
		gameManager.GC.addGrenade( movObj );
    }

 
}