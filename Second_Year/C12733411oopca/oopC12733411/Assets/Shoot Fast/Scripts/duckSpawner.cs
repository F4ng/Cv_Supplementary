using UnityEngine;
using System.Collections;

public class movingDuck{
    public DirectionEnum duckDirection; 
    public Transform duckTransform;

    public movingDuck(DirectionEnum dDir, Transform dTrans)
    {
		duckDirection = dDir;
        duckTransform = dTrans;
    }
    
}

[System.Serializable]
public enum DirectionEnum{left = -1, right= 1}

public class duckSpawner : MonoBehaviour {

    public Transform duckPrefab;
    public DirectionEnum spawnDirection = DirectionEnum.right;
    public static duckSpawner DS;

    private float farLeft;
    private float farRight;    
    private float lastSpawnTime;
    private float spawnInterval;   
	private int difficultyLevel = mainMenu.difficulty;

	void Awake () {
        DS = this;
        
        spawnInterval = Random.Range(3.5f, 5.5f);
        lastSpawnTime = Time.time + Random.Range(0.5f, 1.5f);
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
        lastSpawnTime = Time.time;

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

        DirectionEnum direction = spawnDirection; //-1 or 1

        Transform newObj = (Transform)Instantiate(duckPrefab, transform.position, transform.rotation);
        movingDuck movObj = new movingDuck(direction, newObj);        
        gameManager.GC.AddTarget( movObj );
    }

 
}
