print("For Dictionary 1, Enter:")
x1 = input("Keys: ").split()
x2 = input("Values: ").split()
dict1 = dict(zip(x1,x2))

print("For Dictionary 2, Enter:")
y1 = input("Keys: ").split()
y2 = input("Values: ").split()
dict2 = dict(zip(y1,y2))

dict1.update(dict2)
print("Merged dictionary: ",dict1)

'''
keys=input("Enter keys of dictionary 1: ").split()
values=input("Enter values of dictionary 1: ").split()

s={}
j=0
for i in keys:
 s[i]=values[j]
 j+=1
print("Dictionary 1: ",s)

keys1=input("Enter keys of dictionary 2: ").split()
values1=input("Enter values of dictionary 2: ").split()

s1={}
j=0
for i in keys1:
 s1[i]=values1[j]
 j+=1
print("Dictionary 2: ",s1)

s.update(s1)
print("Merged Dictionary: ",s)
'''