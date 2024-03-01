
keys = input("Keys: ").split()
values = input("Values: ").split()

d = dict(zip(keys,values))

keys.sort()
ascending_d = {i:d[i] for i in keys} 
keys.reverse()
descending_d = {i:d[i] for i in keys}

print("Original Dictionary: ",d)
print("Ascending: ",ascending_d)
print("Descending: ",descending_d)

'''
dictionary = {5: "ball", 8: "pink", 2: "banana", 6: "bee", 1: "toy", 3: "sky"}

#print("Ascending: ",dict(sorted(dictionary.items())))
#print("Descending: ",dict(sorted(dictionary.items(), reverse = True)))
'''

