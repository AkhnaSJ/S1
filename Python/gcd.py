a, b = map(int,input("Enter 2 numbers: ").split())

# Euclidean Algorithm: Repeatedly replacing the second number by its remainder when divided by the first number
while(b):
    a, b = b, a % b

# GCD is the last non zero remainder
print("GCD: ",a)