# rest-api-test
To test rest api in php

randomList.py
# -*- coding: utf-8 -*-
"""
Created on Wed Feb 12 08:05:30 2020

@author: Derrick
"""

import numpy as np
from random import seed
from random import randint

length = input("Please enter the length for the list:")
lower_b = input("Please enter the lower bound for the range of Integer values:")
upper_b = input ("Please enter the upper bound for the range of Integer values:")



def Rand_List(_lower, _upper, _len):
    myList = []
    numCnt = _len - 2
    
    myList.append(_lower)
    myList.append(_upper)
        
    seed(1)

    while(numCnt > 0):
        value = randint(_lower+1, _upper-1)
        
        if value not in myList :
            myList.append(value)
            numCnt-=1
            
    print("Sequence: ", myList)
    
    print("List length: " + str(_len) )
    print("Largest integer: " + str(np.max(myList)))
    print("Smallest integer: " + str(np.min(myList)))
    print("Sum: " + str(np.sum(myList)))
    print("Avg: " + str(np.average(myList)))


Rand_List(int(lower_b), int(upper_b), int(length))


wordgame.py
# -*- coding: utf-8 -*-
"""
Created on Wed Feb 12 09:35:21 2020

@author: Derrick
"""


wordfile = open('valid_words.txt', 'r')

validWords = []
histWords = []

for line in wordfile:
    print(line)
    
    vals = line.replace('\n','').split(',')
    
    validWords.extend(vals)
    
print(validWords)
lastPostFix = ""

while(True):
    yourInput = input("Please type a word: ")
    
    if yourInput not in validWords:
        
        print("You didn't type a word found in word_list.txt.")
    else:
        if (yourInput in histWords):
            print("You typed a word that has been typed before.")
        else :
            histWords.append(yourInput)
            
            preFix = yourInput[0]
            
           # print(preFix)
           # print(lastPostFix)
            
            if (lastPostFix != ""):
                
                if (preFix != lastPostFix):
                    print("You didn't type a word starting with '{0}'.".format(lastPostFix))
                else:
                    lastPostFix = yourInput[len(yourInput) - 1]
            
            else:
                lastPostFix = yourInput[len(yourInput) - 1]
                
            
