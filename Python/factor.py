n = int(input("Enter a number: "))
factor = []
for i in range(1,n+1):
    if n % i == 0 :
        factor.append(i)
print("Factors are: ",factor)


# factor = [i for i in range(1,n+1) if n % i == 0]
# print(factor)