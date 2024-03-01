x = int(input("Number: "))

fact = 1
print("Factorial: ",end='')

if x == 0:
    print(1)
else:
    for i in range(1,x+1):
        fact *= i
    print(fact)