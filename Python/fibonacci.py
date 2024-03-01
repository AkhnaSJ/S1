def fibonacci(n):
    i = 1
    a,b = 0,1

    while(i <= n):
        if i == 1:
            print(a)
        elif i == 2:
            print(b)
        else:
            c = a+b
            print(c)
            a, b = b, c
        i += 1
    
fibonacci(int(input("Enter the no: of terms: ")))