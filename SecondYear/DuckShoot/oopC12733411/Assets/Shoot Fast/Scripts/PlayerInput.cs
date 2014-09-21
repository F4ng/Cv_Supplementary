using UnityEngine;
using System.Collections;

public class PlayerInput : MonoBehaviour {

	public GameObject Explosion2;
    public AudioClip grenadeSound;

	void Update () {	
        if(Input.GetMouseButtonDown(0)){
            Ray ray = Camera.main.ScreenPointToRay (Input.mousePosition);
            RaycastHit hit;
            if (Physics.Raycast (ray, out hit, 100)) {

                Debug.DrawLine (ray.origin, hit.point);

                if (hit.transform.tag == "Duck")
                {

                    audio.pitch = Random.Range(0.9f, 1.3f);
                    audio.Play();
                    gameManager.GC.removeDuck(hit.transform);
                }else if(hit.transform.tag == "Grenade"){
                    audio.PlayOneShot(grenadeSound);

					gameManager.GC.removeGrenade(hit.transform);
                    Vector3 explosionPos = transform.position;
                    hit.rigidbody.AddExplosionForce(5000, explosionPos, 25.0f, 1.0f);

                }

            }
        }
	}
}
