
def fact(x):
    
    if x == 0:
        return 1
    return x * fact(x-1)

x = int(input("Number: "))
print("Factorial: ",fact(x))