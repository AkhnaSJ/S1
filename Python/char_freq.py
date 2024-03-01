
str = input("Enter a string: ")

d = {}
for i in str:
    if i in d:
        d[i] += 1
    else:
        d[i] = 1

print("Characters \tNo: of Occurences")
for i in d:
    print(i,"\t\t",d[i])