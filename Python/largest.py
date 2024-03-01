a,b,c = map(int,input("Enter 3 numbers:").split())

# Finding the largest
if a > b:
    if a > c:
        print( a,"is largest")
    else:
        print( c,"is largest")

else:
    if b > c:
        print(b,"is largest")
    else:
        print(c,"is largest")

# Another method
'''      
if(a > b and a > c):
 print(a, " is the greatest.")

elif(b > c):
 print(b, " is the greatest.")

elif(c != a or c != b):
 print(c, " is the greatest.")

else:
 print("Three numbers are the same") 
'''
