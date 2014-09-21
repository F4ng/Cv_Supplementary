using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication1
{
    public class Word
    {
        public string storedWord;
        public List<int> storedIndex = new List<int>();
        public int i = 0;
        public int addIndex;
        public Word()
        {
            storedWord = " ";
            storedIndex.Add(0);
        }

        public Word(string storedWord, int addIndex)
        {
            this.storedWord = storedWord;
            this.addIndex = addIndex;
            storedIndex.Add(addIndex);
        }

       public override string ToString()
       {
           return storedWord;         
       }


























    }

    





}
